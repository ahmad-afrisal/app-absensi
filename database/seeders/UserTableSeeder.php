<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $admin->assignRole('admin');

        $teachers = [
            [
                'name' => 't1',
                'email' => 't1admin@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 't2',
                'email' => 't2@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 't3',
                'email' => 't3@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 't4',
                'email' => 't4@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 't5',
                'email' => 't5@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 't6',
                'email' => 't6@gmail.com',
                'password' => bcrypt('password'),
            ],
        ];

        foreach ($teachers as $key => $teacher) {
            User::create($teacher)->assignRole('teacher');
        }

    }
}
