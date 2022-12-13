<?php

namespace Tests\Unit;

use Tests\TestCase;

class LoginTest extends TestCase
{
    public function test_akses_login()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    public function test_login_all_input_valid()
    {
        
        
        $this->withoutExceptionHandling();

        $response = $this->get('/login');
        $response = $this->post('/login', [
            'username' => 'ambi123',
            'password' =>'ambi123',
        ]);
        $response->assertStatus(302);
    }
    
}
