<?php

namespace App\Http\Controllers\Perguruan;

use App\Http\Controllers\Controller;
use App\Helpers\PerguruanHelper;
use App\Models\Berita;
use App\Models\Prestasi;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(Request $request): View
    {
        $exist = Berita::where('id_perguruan', PerguruanHelper::id())->exists();
        return view('adminpg.berita.index', compact('exist'));
    }
    public function create(Request $request): View
    {
        return view('adminpg.berita.add');
    }
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('adminpg.berita.edit', compact('berita'));
    }
    public function revisi($id)
    {
        $berita = Berita::findOrFail($id);
        return view('adminpg.berita.revisi', compact('berita'));
    }
    public function store(Request $request): RedirectResponse
    {

        // dd($request->deskripsi);
        $validatedData = $request->validate([
            'judul'     => 'required|string|max:255',
            'file'      => 'required|file|max:2048|mimes:jpeg,png',
            'berita' => 'required|string',
        ], [
            'judul.required'        => 'Judul harus diisi.',
            'judul.string'          => 'Judul harus berupa teks.',
            'judul.max'             => 'Judul tidak boleh lebih dari 255 karakter.',
            'file.required'         => 'File harus diunggah.',
            'file.file'             => 'File harus berupa file.',
            'file.max'              => 'Ukuran logo tidak boleh lebih dari 2MB.',
            'berita.required'    => 'Berita harus diisi.',
            'berita.string'      => 'Berita harus berupa teks.',
            // tambahkan pesan validasi untuk input lainnya
        ]);
        // Mendapatkan waktu saat ini dengan zona waktu Asia/Jakarta menggunakan Carbon
        $tanggal = Carbon::now();
        $hari = $tanggal->dayName;

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $lokasi = $file->move(storage_path('images'),  $nama_file);


        $berita = new Berita();
        $berita->id_perguruan   = PerguruanHelper::id();
        $berita->judul          = $validatedData['judul'];
        $berita->nama_file      = $nama_file;
        $berita->hari           = $hari;
        $berita->berita         = $validatedData['berita'];
        $status =  $berita->save();


        return redirect()->route('adminpg.berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }



    public function update(Request $request, $id): RedirectResponse
    {
        $validatedData = $request->validate([
            'judul'     => 'required|string|max:255',
            'file'      => 'nullable|file|max:2048|mimes:jpeg,png', // Ubah menjadi nullable agar tidak wajib diisi pada update
            'berita'    => 'required|string',
        ], [
            'judul.required'        => 'Judul harus diisi.',
            'judul.string'          => 'Judul harus berupa teks.',
            'judul.max'             => 'Judul tidak boleh lebih dari 255 karakter.',
            'file.file'             => 'File harus berupa file.',
            'file.max'              => 'Ukuran logo tidak boleh lebih dari 2MB.',
            'berita.required'       => 'Berita harus diisi.',
            'berita.string'         => 'Berita harus berupa teks.',
            // tambahkan pesan validasi untuk input lainnya
        ]);
        // Mendapatkan waktu saat ini dengan zona waktu Asia/Jakarta menggunakan Carbon
        $tanggal = Carbon::now();
        $hari = $tanggal->dayName;

        $berita = Berita::findOrFail($id);
        $berita->judul          = $validatedData['judul'];
        $berita->hari           = $hari;
        $berita->berita         = $validatedData['berita'];
        $status =  $berita->save();

        if ($request->hasFile('file')) {
            // Jika ada file baru diupload, lakukan proses update file
            $file = $request->file('file');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $lokasi = $file->move(storage_path('images'),  $nama_file);
            $berita->nama_file = $nama_file;
        }

        $status = $berita->save();

        return redirect()->route('adminpg.berita.index')->with('success', 'Berita berhasil diperbarui!');
    }
    public function updateRevisi(Request $request, $id): RedirectResponse
    {
        $validatedData = $request->validate([
            'judul'     => 'required|string|max:255',
            'file'      => 'nullable|file|max:2048|mimes:jpeg,png', // Ubah menjadi nullable agar tidak wajib diisi pada update
            'berita'    => 'required|string',
        ], [
            'judul.required'        => 'Judul harus diisi.',
            'judul.string'          => 'Judul harus berupa teks.',
            'judul.max'             => 'Judul tidak boleh lebih dari 255 karakter.',
            'file.file'             => 'File harus berupa file.',
            'file.max'              => 'Ukuran logo tidak boleh lebih dari 2MB.',
            'berita.required'       => 'Berita harus diisi.',
            'berita.string'         => 'Berita harus berupa teks.',
            // tambahkan pesan validasi untuk input lainnya
        ]);
        // Mendapatkan waktu saat ini dengan zona waktu Asia/Jakarta menggunakan Carbon
        $tanggal = Carbon::now();
        $hari = $tanggal->dayName;

        $berita = Berita::findOrFail($id);
        $berita->judul              = $validatedData['judul'];
        $berita->hari               = $hari;
        $berita->berita             = $validatedData['berita'];
        $berita->id_status_berita   = 3;
        $status =  $berita->save();

        if ($request->hasFile('file')) {
            // Jika ada file baru diupload, lakukan proses update file
            $file = $request->file('file');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $lokasi = $file->move(storage_path('images'),  $nama_file);
            $berita->nama_file = $nama_file;
        }

        $status = $berita->save();

        return redirect()->route('adminpg.berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy($id): RedirectResponse
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()->route('adminpg.berita.index')->with('success', 'Berita berhasil dihapus!');
    }
}
