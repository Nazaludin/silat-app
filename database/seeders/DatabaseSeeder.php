<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Perguruan;
use App\Models\StatusBerita;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $users = [[
            'name' => 'Nazaludin',
            'role' => 1,
            'email' => 'admin@gmail.com',
            'password' => 'lolololo',
        ], [
            'name' => 'Nazaludin2',
            'role' => 2,
            'email' => 'adminpg@gmail.com',
            'password' => 'lolololo',
        ],];
        foreach ($users as $user) {
            User::create($user);
        }

        $perguruans = [[
            'id_user' => 1,
        ], [
            'id_user' => 2,
        ],];
        foreach ($perguruans as $perguruan) {
            Perguruan::create($perguruan);
        }


        // Seeder untuk StatusBerita
        $statuses = [
            ['nama' => 'Pending'],
            ['nama' => 'Revised'],
            ['nama' => 'Resubmitted'],
            ['nama' => 'Accepted'],
            ['nama' => 'Rejected'],
        ];

        foreach ($statuses as $status) {
            StatusBerita::create($status);
        }
    }
}
