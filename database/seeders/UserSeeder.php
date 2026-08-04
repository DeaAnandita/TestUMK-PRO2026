<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@kampus.ac.id',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        for ($i = 1; $i <= 9; $i++) {
            User::create([
                'name' => 'Dosen '.$i,
                'email' => "dosen{$i}@kampus.ac.id",
                'password' => "Hash::make('password')",
                'role' => 'dosen',
            ]);
        }
    }
}