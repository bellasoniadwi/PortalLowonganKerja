<?php

namespace Database\Seeders;

use App\Models\LowonganPekerjaan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\TokoSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\StatusSeeder;
use Database\Seeders\LayananSeeder;
use Database\Seeders\TransaksiSeeder;
use Database\Seeders\FaqSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            TokoSeeder::class,
            LayananSeeder::class,
            StatusSeeder::class,
            TransaksiSeeder::class,
            KategoriSeeder::class,
            LowonganPekerjaanSeeder::class,
            FaqSeeder::class
        ]);
    }
}
