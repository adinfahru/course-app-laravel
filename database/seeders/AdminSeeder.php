<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12341234'), 
        ]);
    }
}
