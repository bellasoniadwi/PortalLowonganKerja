<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::create([
            'pertanyaan' => 'Bagaimana cara menghubungi admin ketika akun terblokir?',
            'jawaban' => 'Apabila akun terblokir bisa menghubungi nomor 085231404775'
        ]);
        Faq::create([
            'pertanyaan' => 'Bagaimana jika lokasi saya tidak sesuai?',
            'jawaban' => 'Pastikan koneksi internet berjalan dengan baik, dan muat ulang website'
        ]);
        Faq::create([
            'pertanyaan' => 'Bagaimana cara memunculkan koordinat lokasi saya pada kolom pencarian rute?',
            'jawaban' => 'Klik dua kali pada pin lokasi saya'
        ]);
        Faq::create([
            'pertanyaan' => 'Bagaimana menampilkan pekerjaan berdasarkan kategori?',
            'jawaban' => 'Masuk ke menu `Search` dan pilih kategori yang diinginkan'
        ]);
        Faq::create([
            'pertanyaan' => 'Bagaimana cara menggunakan filter radius?',
            'jawaban' => 'Pilih satu radius yang diinginkan (Hanya dapat memilih satu radius saja)'
        ]);
    }
}