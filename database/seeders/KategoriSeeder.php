<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'nama_kategori' => 'Pendidikan',
        ]);
        Kategori::create([
            'nama_kategori' => 'Perbankan',
        ]);
        Kategori::create([
            'nama_kategori' => 'Perkebunan',
        ]);
        Kategori::create([
            'nama_kategori' => 'Pertambangan',
        ]);
    }
}
