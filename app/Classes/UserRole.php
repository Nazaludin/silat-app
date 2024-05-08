<?php

namespace App\Classes;



class AliranSilat
{
    protected $role = ['admin', 'adminpg'];

    public function add($name)
    {
        // Tambahkan aliran baru ke dalam array
        $this->role[] = $name;
    }

    public function getAll()
    {
        return $this->role;
    }

    public function get($index = false)
    {

        // Jika aliran ditemukan, kembalikan nilainya
        if ($index !== false) {
            return $this->aliran[$index];
        }

        // Jika aliran tidak ditemukan, kembalikan null
        return null;
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
