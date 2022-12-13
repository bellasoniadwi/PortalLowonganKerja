<?php

namespace Tests\Unit;

use Tests\TestCase;

class PerusahaanTest extends TestCase
{
    public function test_akses_list_perusahaan()
    {
        $response = $this->get('/dashboard/perusahaan');

        $response->assertStatus(302);
    }
}
