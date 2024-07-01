<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;


class FunctionalController extends Controller
{
    public function viewImage($filename)
    {
        // Path file dalam direktori penyimpanan
        $path = 'images/' . $filename;

        // dd($path, Storage::disk('images')->exists($filename));
        // Periksa apakah file ada
        // Storage::exists();
        if (!Storage::disk('images')->exists($filename)) {
            abort(404);
        }

        // Baca file dan kirimkan ke browser
        // Baca file dan kirimkan ke browser
        $file = Storage::disk('images')->get($filename);
        $type = Storage::disk('images')->mimeType($filename);

        return response($file)->header('Content-Type', $type);
        // return response($file, 200)->header('Content-Type', $type);
    }
    public function uploadImage(Request $request)
    {
        // Definisikan aturan validasi
        $validator = Validator::make($request->all(), [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // maksimal 2MB
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 400);
        }

        // Simpan file yang valid
        if ($request->hasFile('file')) {
            // $path = $request->file('file')->store('public/uploads');
            // $url = Storage::url($path);
            $file = $request->file('file');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $lokasi = $file->move(storage_path('images'),  $nama_file);
            $url = URL::to('/view-image') . '/' . $nama_file;
            return response()->json(['location' => $url]);
        }

        return response()->json(['error' => 'No file uploaded'], 400);
    }
}
