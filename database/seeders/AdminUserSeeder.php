<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Portfolio',
            'email' => 'admin@portfolio.com',
            'password' => bcrypt('password'),
        ]);
    }
}
