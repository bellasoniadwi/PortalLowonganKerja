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
            'nama_kategori' => 'Kosmetik',
        ]);
        Kategori::create([
            'nama_kategori' => 'Perhotelan',
        ]);
        Kategori::create([
            'nama_kategori' => 'Perdagangan',
        ]);
        Kategori::create([
            'nama_kategori' => 'Ekspedisi',
        ]);
        Kategori::create([
            'nama_kategori' => 'Otomotif',
        ]);
        Kategori::create([
            'nama_kategori' => 'Tekstil',
        ]);
        Kategori::create([
            'nama_kategori' => 'Kebugaran',
        ]);
        Kategori::create([
            'nama_kategori' => 'Material',
        ]);
        Kategori::create([
            'nama_kategori' => 'IT',
        ]);
        Kategori::create([
            'nama_kategori' => 'Industri',
        ]);
        Kategori::create([
            'nama_kategori' => 'Keamanan',
        ]);
        Kategori::create([
            'nama_kategori' => 'Kelistrikan & Air',
        ]);
        Kategori::create([
            'nama_kategori' => 'Hiburan',
        ]);
    }
}
