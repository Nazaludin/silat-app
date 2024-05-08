<?php

namespace App\Helpers;


use Illuminate\Support\Facades\Session;

class PerguruanHelper
{
    public static function id()
    {
        // Periksa apakah session perguruan_id ada
        if (Session::has('perguruan_id')) {
            return Session::get('perguruan_id');
        }

        // Jika session tidak ada, kembalikan null
        return null;
    }
}
