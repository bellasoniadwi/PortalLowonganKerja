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
            'kategori' => 'Pendidikan' ,
            'tipe_pekerjaan' => 'Full Time',
            'perusahaan' => 'Ambi Corp',
            'x' => '-7.899770321098634',
            'y' => '112.52919676867126',
            'deskripsi' => 'Butuh 3 orang minimal lulusan S2 Matematika murni yang siap mengajar di kampus A',
            'contact_person' => 'Ambi',
            'no_telp' => '085123404776',
        ]);
    }
}
