<?php

namespace App\Http\Controllers\Perguruan;

use App\Http\Controllers\Controller;
use App\Helpers\PerguruanHelper;
use App\Models\Tokoh;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TokohController extends Controller
{
    public function index(Request $request): View
    {
        $exist = Tokoh::where('id_perguruan', PerguruanHelper::id())->exists();
        return view('adminpg.tokoh.index', compact('exist'));
    }

    public function create(Request $request): View
    {
        return view('adminpg.tokoh.add');
    }

    public function edit($id)
    {
        $tokoh = Tokoh::findOrFail($id);
        return view('adminpg.tokoh.edit', compact('tokoh'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'nama'      => 'required|string|max:255',
            'tipe'      => 'required|string|max:255',
            'file'      => 'required|file|max:2048|mimes:jpeg,png',
            'deskripsi' => 'required|string',
        ], [
            'nama.required'         => 'Nama harus diisi.',
            'nama.string'           => 'Nama harus berupa teks.',
            'nama.max'              => 'Nama tidak boleh lebih dari 255 karakter.',
            'tipe.required'         => 'Tipe harus diisi.',
            'tipe.string'           => 'Tipe harus berupa teks.',
            'tipe.max'              => 'Tipe tidak boleh lebih dari 255 karakter.',
            'file.required'         => 'File harus diunggah.',
            'file.file'             => 'File harus berupa file.',
            'file.max'              => 'Ukuran logo tidak boleh lebih dari 2MB.',
            'deskripsi.required'    => 'Deskripsi harus diisi.',
            'deskripsi.string'      => 'Deskripsi harus berupa teks.',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $lokasi = $file->move(storage_path('images'),  $nama_file);


        $tokoh = new Tokoh();
        $tokoh->id_perguruan     = PerguruanHelper::id();
        $tokoh->nama             = $validatedData['nama'];
        $tokoh->tipe             = $validatedData['tipe'];
        $tokoh->nama_file        = $nama_file;
        $tokoh->deskripsi        = $validatedData['deskripsi'];
        $status =  $tokoh->save();


        return redirect()->route('adminpg.tokoh.index')->with('success', 'Data tokoh berhasil ditambahkan!');
    }



    public function update(Request $request, $id): RedirectResponse
    {
        $validatedData = $request->validate([
            'nama'      => 'required|string|max:255',
            'tipe'      => 'required|string|max:255',
            'file'      => 'nullable|file|max:2048|mimes:jpeg,png', // Ubah menjadi nullable agar tidak wajib diisi pada update
            'deskripsi' => 'required|string',
        ], [
            'nama.required'         => 'Nama harus diisi.',
            'nama.string'           => 'Nama harus berupa teks.',
            'nama.max'              => 'Nama tidak boleh lebih dari 255 karakter.',
            'tipe.required'         => 'Tipe harus diisi.',
            'tipe.string'           => 'Tipe harus berupa teks.',
            'tipe.max'              => 'Tipe tidak boleh lebih dari 255 karakter.',
            // 'file.required'         => 'File harus diunggah.',
            'file.file'             => 'File harus berupa file.',
            'file.max'              => 'Ukuran logo tidak boleh lebih dari 2MB.',
            'deskripsi.required'    => 'Deskripsi harus diisi.',
            'deskripsi.string'      => 'Deskripsi harus berupa teks.',
        ]);

        $tokoh = Tokoh::findOrFail($id);
        $tokoh->nama = $validatedData['nama'];
        $tokoh->tipe = $validatedData['tipe'];
        $tokoh->deskripsi = $validatedData['deskripsi'];

        if ($request->hasFile('file')) {
            // Jika ada file baru diupload, lakukan proses update file
            $file = $request->file('file');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $lokasi = $file->move(storage_path('images'),  $nama_file);
            $tokoh->nama_file = $nama_file;
        }

        $tokoh->save();

        return redirect()->route('adminpg.tokoh.index')->with('success', 'Prestasi berhasil diperbarui!');
    }

    public function destroy($id): RedirectResponse
    {
        $prestasi = Tokoh::findOrFail($id);
        $prestasi->delete();

        return redirect()->route('adminpg.tokoh.index')->with('success', 'Prestasi berhasil dihapus!');
    }
}
