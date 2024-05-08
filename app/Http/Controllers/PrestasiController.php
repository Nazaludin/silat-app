<?php

namespace App\Http\Controllers;

use App\Helpers\PerguruanHelper;
use App\Models\Prestasi;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function create(Request $request): View
    {
        return view('adminpg.prestasi.add');
    }
    public function store(Request $request): RedirectResponse
    {

        // dd($request->deskripsi);
        $validatedData = $request->validate([
            'judul'     => 'required|string|max:255',
            'tahun'     => 'required|numeric',
            'file'      => 'required|file|max:2048|mimes:jpeg,png',
            'deskripsi' => 'required|string',
        ], [
            'judul.required'        => 'Judul harus diisi.',
            'judul.string'          => 'Judul harus berupa teks.',
            'judul.max'             => 'Judul tidak boleh lebih dari 255 karakter.',
            'tahun.required'        => 'Tahun harus diisi.',
            'tahun.numeric'         => 'Tahun harus berupa angka.',
            // 'tahun.max'             => 'Tahun tidak boleh lebih dari 255 karakter.',
            'file.required'         => 'File harus diunggah.',
            'file.file'             => 'File harus berupa file.',
            'logo.max'              => 'Ukuran logo tidak boleh lebih dari 2MB.',
            'deskripsi.required'    => 'Deskripsi harus diisi.',
            'deskripsi.string'      => 'Deskripsi harus berupa teks.',
            // tambahkan pesan validasi untuk input lainnya
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $lokasi = $file->move(storage_path('images'),  $nama_file);


        $prestasi = new Prestasi();
        $prestasi->id_perguruan    = PerguruanHelper::id();
        $prestasi->judul           = $validatedData['judul'];
        $prestasi->tahun           = $validatedData['tahun'];
        $prestasi->nama_file       = $nama_file;
        $prestasi->deskripsi       = $validatedData['deskripsi'];
        $status =  $prestasi->save();

        dd($status);
        // return redirect()->route('perguruan.index')->with('success', 'Perguruan berhasil ditambahkan!');
    }
}
