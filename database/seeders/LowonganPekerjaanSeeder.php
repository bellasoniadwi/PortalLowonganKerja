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
            'nama_pekerjaan' => 'Guru Bahasa',
            'kategori' => 'Pendidikan' ,
            'tipe_pekerjaan' => 'Full Time',
            'perusahaan' => 'Ambi Corp',
            'x' => '-7.899770321098634',
            'y' => '112.52919676867126',
            'deskripsi' => 'Butuh 1 orang guru wanita yang berpengalaman mengajar anak SMP, pendidikan minimal S1 Bahasa',
            'gaji' => '200 ribu per pertemuan',
            'jam_kerja' => '4 jam/pertemuan',
            'contact_person' => 'Ambi',
            'no_telp' => '085123404776',
        ]);
    }
}
