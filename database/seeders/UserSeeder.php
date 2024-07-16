<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create an array of users to seed
        $users = [
            [
                'name' => 'George',
                'email' => 'admin@gmail.com',
                'secondary_email' => 'admin.secondary@gmail.com',
                'role_id' => 1, // Assuming 1 is the ID for the Admin role
                'password' => Hash::make('password123'),
                'is_online' => false,
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'secondary_email' => 'user.secondary@gmial.com',
                'role_id' => 1, // Assuming 2 is the ID for the Regular User role
                'password' => Hash::make('password123'),
                'is_online' => false,
            ],
            [
                'name' => 'Fidel',
                'email' => 'fidel.isaboke@strathmore.edu',
                'secondary_email' => 'user.secondary@example.com',
                'role_id' => 1, // Assuming 2 is the ID for the Regular User role
                'password' => Hash::make('password123'),
                'is_online' => false,
            ],
            // 
            [
                'name' => 'Fundi',
                'email' => 'kithinjigeorge192@gmail.com',
                'secondary_email' => 'fundi.secondary@example.com',
                'role_id' => 1, // Assuming 2 is the ID for the Regular User role
                'password' => Hash::make('password123'),
                'is_online' => false,
            ],
            // 
            [
                'name' => 'Chege',
                'email' => 'chege.gitiche@strathmore.edu',
                'secondary_email' => 'chege.secondary@example.com',
                'role_id' => 1, // Assuming 2 is the ID for the Regular User role
                'password' => Hash::make('password123'),
                'is_online' => false,
            ],
            // 
            [
                'name' => 'Kithinji',
                'email' => 'georgekithinji035@gmail.com',
                'secondary_email' => 'kithinji.secondary@example.com',
                'role_id' => 1, // Assuming 2 is the ID for the Regular User role
                'password' => Hash::make('password123'),
                'is_online' => false,
            ],
            // 
            [
                'name' => 'Emmanuel',
                'email' => 'emmanuel.chege@gmail.com',
                'secondary_email' => 'us.secondary@example.com',
                'role_id' => 1, // Assuming 2 is the ID for the Regular User role
                'password' => Hash::make('password123'),
                'is_online' => false,
            ],
            // 
            [
                'name' => 'Yamada',
                'email' => 'yamada.me@gmail.com',
                'secondary_email' => 'yamada.secondary@example.com',
                'role_id' => 1, // Assuming 2 is the ID for the Regular User role
                'password' => Hash::make('password123'),
                'is_online' => false,
            ],
            // 
            // Add more users as needed
        ];

        // Loop through each user and create them
        foreach ($users as $user) {
            User::create($user);
        }
    }
}