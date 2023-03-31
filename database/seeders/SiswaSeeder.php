<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::create([
            'nama' => 'Zahid Azmi Ibrahim',
            'asal_sekolah' => 'Al-Azhar Cilacap',
            'tahun_lulus' => '2023',
        ]);
        Siswa::create([
            'nama' => 'Gulam Halim',
            'asal_sekolah' => 'Al-Irsyad Cilacap',
            'tahun_lulus' => '2023',
        ]);
    }
}
