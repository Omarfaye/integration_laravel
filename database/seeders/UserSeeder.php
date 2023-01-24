<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name' => 'Al faruq',
            'email' => "omzolive@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ])->assignRole('admin');
    }
}
