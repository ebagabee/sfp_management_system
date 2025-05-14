<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users =
            [
                [
                    'name' => 'admin',
                    'email' => 'admin@email.com',
                    'password' => bcrypt('admin123'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Cleiton',
                    'email' => 'cleiton@email.com',
                    'password' => bcrypt('cleiton123'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ];

            foreach($users as $user) {
                User::updateOrCreate($user);
            }
    }
}
