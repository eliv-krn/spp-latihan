<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Petugas;

class DataAkun extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'username' => 'eliv',
                'password' => bcrypt('123'),
                'nama_petugas' => 'Eliv Kurniawan',
                'level' => 'admin',
            ],
        ];

        foreach ($userData as $key => $val) {
            Petugas::create($val);
        }
    }
}
