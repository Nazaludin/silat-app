<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Provinsi;

use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function tambahData(Request $request)
    {
        $jsonFilePath = storage_path('wilayah.json');

        // Membaca konten dari file JSON
        $jsonData = file_get_contents($jsonFilePath);

        // Mengubah JSON menjadi array
        $data = json_decode($jsonData, true);

        foreach ($data['provinsi'] as $key => $value) {
            $newProvinsi = new Provinsi();
            $newProvinsi->kode_provinsi = $key;
            $newProvinsi->provinsi = $value;
            $newProvinsi->save();
        }
        foreach ($data['kabupaten'] as $key => $value) {
            foreach ($value as $keyKab => $valueKab) {
                $newKabupaten = new Kabupaten();
                $newKabupaten->kode_provinsi = $key;
                $newKabupaten->kode_kabupaten = $keyKab;
                $newKabupaten->kabupaten = $valueKab;
                $newKabupaten->save();
            }
        }
        foreach ($data['kecamatan'] as $key => $value) {
            foreach ($value as $keyKec => $valueKec) {
                $newKecamatan = new Kecamatan();
                $newKecamatan->kode_provinsi = substr($key, 0, 2);
                $newKecamatan->kode_kabupaten = substr($key, 2);
                $newKecamatan->kode_kecamatan = $keyKec;
                $newKecamatan->kecamatan = $valueKec;
                $newKecamatan->save();
            }
        }

        return response()->json(['message' => 'Data wilayah berhasil disimpan'], 200);
    }
}
