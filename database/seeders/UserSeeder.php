<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            'name' => 'Admin',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'role_id' => 1,
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(60),
        ]);
        
        User::create([
            'name' => 'pegawai',
            'level' => 'pegawai',
            'email' => 'pegawai@gmail.com',
            'role_id' => 2,
            'password' => Hash::make('pegawai'),
            'remember_token' => Str::random(60),
        ]);
    }
}
