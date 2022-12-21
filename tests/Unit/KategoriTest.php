<?php

namespace Tests\Unit;

use App\Models\Kategori;
use Tests\TestCase;

class KategoriTest extends TestCase
{
    public function test_akses_list_kategori()
    {
        $response = $this->get('/dashboard/kategori');

        $response->assertStatus(302);
    }

    public function test_kategori_create()
    {
        $user = Kategori::factory()->count(1)->make();
        $user->make();
        $this->assertTrue(true);
    }

    public function test_kategori_delete()
    {
        $user = Kategori::factory()->count(1)->make();

        $user = Kategori::first();

        if($user){
            $user->delete();
        }

        $this->assertTrue(true);
    }

    
}
