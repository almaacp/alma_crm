<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Data untuk Sales
        User::create([
            'name' => 'Sales',
            'email' => 'user-sales@ptsmart.com',
            'password' => Hash::make('12345678'),
            'role' => 'sales',
        ]);

        // Data untuk Manager
        User::create([
            'name' => 'Manager',
            'email' => 'user-manager@ptsmart.com',
            'password' => Hash::make('12345678'),
            'role' => 'manager',
        ]);
    }
}