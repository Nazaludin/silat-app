<?php

namespace App\Helpers;


use Illuminate\Support\Facades\Session;

class PerguruanHelper
{
    public static function id()
    {
        // Periksa apakah session perguruan_id ada
        if (Session::has('id_perguruan')) {
            return Session::get('id_perguruan');
        }

        // Jika session tidak ada, kembalikan null
        return null;
    }
}
