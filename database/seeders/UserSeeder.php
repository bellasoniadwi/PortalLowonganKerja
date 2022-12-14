<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Admin',
            'username' => 'lokerportaltrixsite',
            'email' => 'ayianjani774@gmail.com',
            'no_telp' => '085231404775',
            'perusahaan' => 'Portal Lowongan Pekerjaan',
            'email_verified_at' => now(),
            'password' => bcrypt('90475spidertrix#ambi'),
            'is_admin' => true,
            'is_active' => true,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'nama' => 'Ambi',
            'username' => 'ambi',
            'email' => 'ambi@gmail.com',
            'no_telp' => '089876542500',
            'perusahaan' => 'Ambi Corp',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_active' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'nama' => 'Ambi',
            'username' => 'ambi123',
            'email' => 'ambi123@gmail.com',
            'no_telp' => '089876543212',
            'perusahaan' => 'Ambi Corp',
            'email_verified_at' => now(),
            'password' => bcrypt('ambi123'),
            'is_active' => true,
            'remember_token' => Str::random(10),
        ]);
    }
}
