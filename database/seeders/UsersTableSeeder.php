<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = [
            'name' => 'Siswa',
            'email' => 'siswa@gmail.com',
            'type' => '0',
            'status' => '1',
            'password' => bcrypt('pass'),

        ];

        if (!User::where('email', $client['email'])->exists()) {
            User::create($client);
        }

        $admin = [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'type' => '1',
            'status' => '1',
            'password' => bcrypt('pass'),

        ];

        if (!User::where(
            'email',
            $admin['email']
        )->exists()) {
            User::create($admin);
        }
    }
}
