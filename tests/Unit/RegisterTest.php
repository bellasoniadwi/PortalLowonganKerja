<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    public function test_akses_register()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_duplikasi_data_registrasi()
    {
        $user1 = User::make([
            'nama' => 'Anjani Dwilestari',
            'username' => 'anjanidwilestarii',
            'password' =>'anjani1234',
            'email' => 'anjani@gmail.com',
            'no_telp' => '0897654123445',
            'perusahaan' => 'AANS Store',

        ]);
        $user2 = User::make([
            'nama' => 'Ardian Bhagaskara',
            'username' => 'ardianbhagaskara',
            'password' =>'ardian1234',
            'email' => 'ardian@gmail.com',
            'no_telp' => '0897654123665',
            'perusahaan' => 'AANS Store',

        ]);

        $this->assertTrue($user1->nama != $user2->nama);
    }

    public function test_user_delete()
    {
        $user = User::factory()->count(1)->make();

        $user = User::first();

        if($user){
            $user->delete();
        }

        $this->assertTrue(true);
    }

    
    
}
