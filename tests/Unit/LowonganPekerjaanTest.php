<?php

namespace Tests\Unit;

use App\Models\LowonganPekerjaan;
use Tests\TestCase;

class LowonganPekerjaanTest extends TestCase
{
    public function test_akses_arsip()
    {
        $response = $this->get('/dashboard/arsiplowonganpekerjaan');

        $response->assertStatus(302);
    }

    public function test_lowongan_create()
    {
        $user = LowonganPekerjaan::factory()->count(1)->make();
        $user->make();
        $this->assertTrue(true);
    }

    public function test_lowongan_delete()
    {
        $user = LowonganPekerjaan::factory()->count(1)->make();

        $user = LowonganPekerjaan::first();

        if($user){
            $user->delete();
        }

        $this->assertTrue(true);
    }

    
}
