<?php

namespace Tests\Unit;

use Tests\TestCase;

class FilterTest extends TestCase
{
    public function test_akses_filter()
    {
        $response = $this->get('/tracking');

        $response->assertStatus(200);
    }
    public function test_akses_data_filter()
    {
        $response = $this->get('/cari?keyword=Hiburan');

        $response->assertStatus(200);
    }
}
