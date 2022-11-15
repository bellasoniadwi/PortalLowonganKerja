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
            'pertanyaan' => 'Izin bertanya, akun saya terblokir dan saya disuruh menghubungi admin. Untuk menghubungi kontaknya dimana ya? Saya tidak menemukan soalnya. Terima kasih sebelumnya',
            'jawaban' => 'Terima kasih pertanyaannya, apabila akun anda terblokir, bisa menghubungi kontak ini ya 08XX'
        ]);
        Faq::create([
            'pertanyaan' => 'Adminnya sibuk banget yaa, semangat ya admin !'
        ]);
    }
}
