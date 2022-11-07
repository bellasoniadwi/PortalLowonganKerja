<?php

namespace Database\Seeders;

use App\Models\LowonganPekerjaan;
use Illuminate\Database\Seeder;

class LowonganPekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LowonganPekerjaan::create([
            'nama_pekerjaan' => 'Dosen',
            'kategori_id' => '1' ,
            'tipe_pekerjaan' => 'Full Time',
            'perusahaan' => 'Ambi Corp',
            'x' => '-7.899770321098634',
            'y' => '112.52919676867126',
            'deskripsi' => 'Gaji 3jt',
            'contact_person' => 'Ambi',
            'no_telp' => '085123404776',
        ]);
    }
}
