<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Fahru',
            'email' => 'fahru@gmail.com',
            'password' => Hash::make('12341234'),
        ]);

        User::create([
            'name' => 'Adin',
            'email' => 'adin@gmail.com',
            'password' => Hash::make('12341234'),
        ]);
    }
}
