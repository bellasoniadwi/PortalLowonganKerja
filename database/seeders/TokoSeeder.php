<?php

namespace Database\Seeders;

use App\Models\Toko;
use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jam_buka = '08:00:00';
        $jam_tutup = '22:00:00';

        Toko::create([
            'x' => '-7.944008229256199',
            'y' => '112.61484149972331',
            'jam_buka' => $jam_buka,
            'jam_tutup' => '16:00:00',
            'nama' => 'Politeknik Negeri Malang',
            'no_hp' => '08125461564',
            'alamat' => 'Jl. Soekarno Hatta No.9, kota Malang'
        ]);

    }
}
