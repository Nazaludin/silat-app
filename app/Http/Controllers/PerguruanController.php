<?php

namespace App\Http\Controllers;

use App\Models\Perguruan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Classes\AliranSilat;
use Illuminate\Support\Facades\Auth;

class PerguruanController extends Controller
{
    public function index(Request $request): View
    {
        $perguruan = Perguruan::where('id_user', Auth::user()->id);
        return view('adminpg.perguruan.index', compact('perguruan'));
    }
    public function create(Request $request): View
    {
        // $myClass = new AliranSilat;
        // $myClass->add('Muaitai');
        // dd($myClass->get());

        return view('adminpg.perguruan.add');
    }
    public function createSejarah(Request $request): View
    {
        // $myClass = new AliranSilat;
        // $myClass->add('Muaitai');
        // dd($myClass->get());
        $perguruan = Perguruan::where('id_user', Auth::user()->id)
            ->where('sejarah', '<>', '') // Exclude empty strings
            ->first();
        // dd($sejarah);
        $sejarah = '';
        if ($perguruan) {
            $sejarah = $perguruan->sejarah;
            $exist = true;
        } else {
            $exist = false;
        }
        return view('adminpg.sejarah.add', compact('exist', 'sejarah'));
    }
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'nama'          => 'required|string|max:255',
            'arti_nama'     => 'required|string|max:255',
            'motto'         => 'required|string|max:255',
            // 'sejarah'       => 'required|string|max:255',
            'deskripsi'     => 'required|string|max:255',
            'logo'          => 'required|file|max:2048|mimes:jpeg,png',
            // 'lokasi_logo'   => 'required|string|max:255',
            'makna_logo'    => 'required|string|max:255',
            'tahun_berdiri' => 'required|string|max:255',
            'aliran'        => 'required|string|max:255',
            'provinsi'      => 'required|string|max:255',
            'kecamatan'     => 'required|string|max:255',
            'kabupaten'     => 'required|string|max:255',
            'desa'          => 'required|string|max:255',
            'nama_jalan'    => 'required|string|max:255',
        ], [
            'nama.required'          => 'Nama perguruan harus diisi.',
            'nama.string'            => 'Nama perguruan harus berupa teks.',
            'nama.max'               => 'Nama perguruan tidak boleh lebih dari 255 karakter.',
            'arti_nama.required'     => 'Arti nama perguruan harus diisi.',
            'arti_nama.string'       => 'Arti nama perguruan harus berupa teks.',
            'arti_nama.max'          => 'Arti nama perguruan tidak boleh lebih dari 255 karakter.',
            'motto.required'         => 'Motto perguruan harus diisi.',
            'motto.string'           => 'Motto perguruan harus berupa teks.',
            'motto.max'              => 'Motto perguruan tidak boleh lebih dari 255 karakter.',
            // 'sejarah.required'       => 'Sejarah perguruan harus diisi.',
            // 'sejarah.string'         => 'Sejarah perguruan harus berupa teks.',
            // 'sejarah.max'            => 'Sejarah perguruan tidak boleh lebih dari 255 karakter.',
            'deskripsi.required'     => 'Deskripsi perguruan harus diisi.',
            'deskripsi.string'       => 'Deskripsi perguruan harus berupa teks.',
            'deskripsi.max'          => 'Deskripsi perguruan tidak boleh lebih dari 255 karakter.',
            'logo.required'          => 'Logo perguruan harus diunggah.',
            'logo.file'              => 'Logo harus berupa file.',
            'logo.max'               => 'Ukuran logo tidak boleh lebih dari 2MB.',
            // 'lokasi_logo.required'   => 'Lokasi logo perguruan harus diisi.',
            // 'lokasi_logo.string'     => 'Lokasi logo perguruan harus berupa teks.',
            // 'lokasi_logo.max'        => 'Lokasi logo perguruan tidak boleh lebih dari 255 karakter.',
            'makna_logo.required'    => 'Makna logo perguruan harus diisi.',
            'makna_logo.string'      => 'Makna logo perguruan harus berupa teks.',
            'makna_logo.max'         => 'Makna logo perguruan tidak boleh lebih dari 255 karakter.',
            'tahun_berdiri.required' => 'Tahun berdiri perguruan harus diisi.',
            'tahun_berdiri.string'   => 'Tahun berdiri perguruan harus berupa teks.',
            'tahun_berdiri.max'      => 'Tahun berdiri perguruan tidak boleh lebih dari 255 karakter.',
            'aliran.required'        => 'Aliran perguruan harus diisi.',
            'aliran.string'          => 'Aliran perguruan harus berupa teks.',
            'aliran.max'             => 'Aliran perguruan tidak boleh lebih dari 255 karakter.',
            'provinsi.required'      => 'Provinsi perguruan harus diisi.',
            'provinsi.string'        => 'Provinsi perguruan harus berupa teks.',
            'provinsi.max'           => 'Provinsi perguruan tidak boleh lebih dari 255 karakter.',
            'kabupaten.required'     => 'Kota perguruan harus diisi.',
            'kabupaten.string'       => 'Kota perguruan harus berupa teks.',
            'kabupaten.max'          => 'Kota perguruan tidak boleh lebih dari 255 karakter.',
            'kecamatan.required'     => 'Kecamatan perguruan harus diisi.',
            'kecamatan.string'       => 'Kecamatan perguruan harus berupa teks.',
            'kecamatan.max'          => 'Kecamatan perguruan tidak boleh lebih dari 255 karakter.',
            'desa.required'          => 'Desa perguruan harus diisi.',
            'desa.string'            => 'Desa perguruan harus berupa teks.',
            'desa.max'               => 'Desa perguruan tidak boleh lebih dari 255 karakter.',
            'nama_jalan.required'    => 'Nama jalan perguruan harus diisi.',
            'nama_jalan.string'      => 'Nama jalan perguruan harus berupa teks.',
            'nama_jalan.max'         => 'Nama jalan perguruan tidak boleh lebih dari 255 karakter.',
            // tambahkan pesan validasi untuk input lainnya
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('logo');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $lokasi = $file->move(storage_path('images'),  $nama_file);

        $perguruan = Perguruan::where('id_user', Auth::user()->id)->first();
        // dd($perguruan);
        if ($perguruan) {
            $perguruan->nama            = $validatedData['nama'];
            $perguruan->arti_nama       = $validatedData['arti_nama'];
            $perguruan->motto           = $validatedData['motto'];
            // $perguruan->sejarah         = $validatedData['sejarah'];
            $perguruan->deskripsi       = $validatedData['deskripsi'];
            $perguruan->nama_file_logo  = $nama_file;
            $perguruan->makna_logo      = $validatedData['makna_logo'];
            $perguruan->tahun_berdiri   = $validatedData['tahun_berdiri'];
            $perguruan->aliran          = $validatedData['aliran'];
            $perguruan->provinsi        = $validatedData['provinsi'];
            $perguruan->kabupaten       = $validatedData['kabupaten'];
            $perguruan->kecamatan       = $validatedData['kecamatan'];
            $perguruan->desa            = $validatedData['desa'];
            $perguruan->nama_jalan      = $validatedData['nama_jalan'];

            $status = $perguruan->save();
        } else {
            $status = false;
        }

        dd($status);
        // return redirect()->route('perguruan.index')->with('success', 'Perguruan berhasil ditambahkan!');
    }
    public function storeSejarah(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'sejarah'       => 'required|string',
        ], [
            'sejarah.required'       => 'Sejarah perguruan harus diisi.',
            'sejarah.string'         => 'Sejarah perguruan harus berupa teks.',
            // 'sejarah.max'            => 'Sejarah perguruan tidak boleh lebih dari 255 karakter.',
        ]);

        $perguruan = Perguruan::where('id_user', Auth::user()->id)->first();
        // dd($perguruan);
        if ($perguruan) {
            $perguruan->sejarah         = $validatedData['sejarah'];
            $status = $perguruan->save();
        } else {
            $status = false;
        }
        return redirect()->route('adminpg.sejarah.index')->with('success', 'Sejarah berhasil diperbarui!');
    }
}
