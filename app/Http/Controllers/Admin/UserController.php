<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index(Request $request): View
    {
        return view('admin.user.index');
    }
    public function accept($id)
    {
        $user = User::findOrFail($id);
        // Terima User
        $user->access_status = 'active';
        $user->allow_access_at = Carbon::now();
        $user->save();
        return redirect()->route('admin.user.index')->with('success', 'User ' . $user->name . ' telah aktif!');
    }
    public function ban($id)
    {
        $user = User::findOrFail($id);
        // Terima User
        $user->access_status = 'banned';
        $user->save();
        return redirect()->route('admin.user.index')->with('success', 'User ' . $user->name . ' telah diban dari sistem!');
    }
    public function update(Request $request, $id): RedirectResponse
    {
        $user = User::findOrFail($id);

        // Ambil semua data yang ada di request
        $data = $request->all();

        // Menyusun aturan validasi dinamis
        $rules = [
            'name' => ['sometimes', 'nullable', 'string', 'max:255'],
            'password' => ['sometimes', 'nullable',  Rules\Password::defaults()],
        ];

        // Tambahkan aturan unique untuk email hanya jika email yang dimasukkan berbeda dari yang ada di database
        if ($request->has('email') && $request->email !== $user->email) {
            $rules['email'] = ['sometimes', 'nullable', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'];
        } else {
            $rules['email'] = ['sometimes', 'nullable', 'string', 'lowercase', 'email', 'max:255'];
        }

        // Validasi data berdasarkan aturan yang disusun
        $validatedData = Validator::make($data, $rules, [
            'name.string'           => 'Nama harus berupa teks.',
            'name.max'              => 'Nama tidak boleh lebih dari 255 karakter.',
            'email.string'          => 'Email harus berupa teks.',
            'email.email'           => 'Email tidak valid.',
            'email.lowercase'       => 'Email harus berupa huruf kecil.',
            'email.unique'          => 'Email tidak boleh sama.',
            'email.max'             => 'Email tidak boleh lebih dari 255 karakter.',
            // 'password.confirmed'    => 'Kata sandi harus terkonfirmasi.',
        ])->validate();

        // Update hanya jika data berubah
        $updated = false;

        if ($request->has('name') && $validatedData['name'] !== $user->name) {
            $user->name = $validatedData['name'];
            $updated = true;
        }

        if ($request->has('email') && $validatedData['email'] !== $user->email) {
            $user->email = $validatedData['email'];
            $updated = true;
        }

        if ($request->has('password')) {
            $hashedPassword = bcrypt($validatedData['password']);
            if (!Hash::check($validatedData['password'], $user->password)) {
                $user->password = $hashedPassword;
                $updated = true;
            }
        }

        if ($updated) {
            $user->save();
            return redirect()->route('admin.user.index')->with('success', 'Pengguna ' . $user->name . ' berhasil diperbarui!');
        } else {
            return redirect()->route('admin.user.index')->with('success', 'Pengguna ' . $user->name . ' tidak diperbarui!');
        }
    }

    public function destroy($id): RedirectResponse
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.user.index')->with('success', 'Pengguna ' . $user->name . ' berhasil dihapus!');
    }
}
