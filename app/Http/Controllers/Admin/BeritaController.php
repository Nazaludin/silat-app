<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\KomenRevisi;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    //
    public function index(Request $request): View
    {
        return view('admin.berita.index');
    }

    public function accept($id)
    {
        $berita = Berita::findOrFail($id);
        // Terima Berita
        $berita->id_status_berita = 4;
        $berita->save();
        return redirect()->route('admin.berita.index')->with('success', 'Berita telah divalidasi!');
    }
    public function reject($id)
    {
        $berita = Berita::findOrFail($id);
        // Tolak Berita
        $berita->id_status_berita = 5;
        $berita->save();
        return redirect()->route('admin.berita.index')->with('success', 'Berita telah ditolak!');
    }
    public function revisi(Request $request, $id)
    {

        $validatedData = $request->validate([
            'saran'      => 'required|string|max:255',
        ], [
            'saran.required'         => 'Saran harus diisi.',
            'saran.string'           => 'Saran harus berupa teks.',
            'saran.max'              => 'Saran tidak boleh lebih dari 255 karakter.',
        ]);

        // dd($validatedData);
        $berita = Berita::findOrFail($id);
        // Revisi Berita
        $berita->id_status_berita = 2;
        $berita->save();

        $revisi = new KomenRevisi();
        $revisi->id_berita = $berita->id_berita;
        $revisi->komen = $validatedData['saran'];
        $revisi->save();

        return redirect()->route('admin.berita.index')->with('success', 'Instruksi revisi telah dikirim!');
    }
}
