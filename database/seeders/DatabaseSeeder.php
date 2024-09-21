<?php

namespace Database\Seeders;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => '12345',
            'nama' => 'Admin',
            'password' => Hash::make('12345'),
            'role' => 'BAA'
        ]);
        User::create([
            'username' => '0055P',
            'nama' => 'Tri Buana Ayu',
            'password' => Hash::make('0055P'),
            'role' => 'Mahasiswa'
        ]);
        User::create([
            'username' => '0056P',
            'nama' => 'Wendy Steven',
            'password' => Hash::make('0056P'),
            'role' => 'Mahasiswa'
        ]);
        User::create([
            'username' => '0112P',
            'nama' => 'Agung Riski Ariza',
            'password' => Hash::make('0112P'),
            'role' => 'Mahasiswa'
        ]);
    }
}
