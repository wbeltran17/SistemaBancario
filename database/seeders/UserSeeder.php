<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'id' => 1,
            'document' => '123456789',
            'name' => 'Administrador',
            'address' => 'Calle falsa 123',
            'phone' => '3555555',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'created_at' => now(),
            'updated_at' => now()
        ])
            ->assignRole('admin');

        User::create([
            'id' => 2,
            'document' => '1234567890',
            'name' => 'personal',
            'address' => 'Calle falsa 123',
            'phone' => '3555555',
            'email' => 'personal@personal.com',
            'email_verified_at' => now(),
            'password' => Hash::make('personal'),
            'created_at' => now(),
            'updated_at' => now()
        ])
            ->assignRole('personal');

        User::create([
            'id' => 3,
            'document' => '0123456789',
            'name' => 'student',
            'address' => 'Calle falsa 123',
            'phone' => '3555555',
            'email' => 'student@student.com',
            'email_verified_at' => now(),
            'password' => Hash::make('student'),
            'created_at' => now(),
            'updated_at' => now()
        ])
            ->assignRole('student');
    }
}
