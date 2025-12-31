<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@schizocheck.com'],
            [
                'name' => 'Admin',
                'email' => 'admin@schizocheck.com',
                'password' => Hash::make('admin123'),
            ]
        );
    }
}
