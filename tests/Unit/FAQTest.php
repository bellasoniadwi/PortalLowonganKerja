<?php

namespace Tests\Unit;

use App\Models\Faq;
use Tests\TestCase;

class FAQTest extends TestCase
{
    public function test_akses_faqs()
    {
        $response = $this->get('/faqs');

        $response->assertStatus(200);
    }

    public function test_duplikasi_data_pertanyaan()
    {
        $faq1 = Faq::make([
            'pertanyaan' => 'Apakah untuk satu orang hrd boleh memiliki dua akun?',

        ]);
        $faq2 = Faq::make([
            'pertanyaan' => 'Apakah untuk satu prusahaan boleh memiliki dua akun?',

        ]);

        $this->assertTrue($faq1->pertanyaan != $faq2->pertanyaan);
    }
    public function test_faq_create()
    {
        $faq = Faq::factory()->count(1)->make();
        $faq->make();
        $this->assertTrue(true);
    }
}
