<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
}
