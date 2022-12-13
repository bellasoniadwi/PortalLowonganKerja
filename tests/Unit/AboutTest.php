<?php

namespace Tests\Unit;

use Tests\TestCase;

class AboutTest extends TestCase
{
    public function test_akses_about()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
}
