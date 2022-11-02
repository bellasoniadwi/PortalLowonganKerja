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
            'username' => 'admin',
            'foto' => null,
            'email' => 'admin@gmail.com',
            'no_telp' => '081222333444',
            'perusahaan' => 'Portal',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
            'is_admin' => true,
            'is_block' => 'no',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'nama' => 'Ambi',
            'username' => 'ambi',
            'foto' => null,
            'email' => 'ambi@gmail.com',
            'no_telp' => '089876543212',
            'perusahaan' => 'Ambi Corp',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_block' => 'no',
            'remember_token' => Str::random(10),
        ]);
    }
}
