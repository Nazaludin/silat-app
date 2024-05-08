<?php

namespace App\Classes;



class AliranSilat
{
    protected $aliran = [];

    public function add($name)
    {
        // Tambahkan aliran baru ke dalam array
        $this->aliran[] = $name;
    }

    public function get()
    {
        return $this->aliran;
    }

    public function getIndex($name)
    {
        // Cari aliran dalam array
        $index = array_search($name, $this->aliran);

        // Jika aliran ditemukan, kembalikan nilainya
        if ($index !== false) {
            return $this->aliran[$index];
        }

        // Jika aliran tidak ditemukan, kembalikan null
        return null;
    }
}
