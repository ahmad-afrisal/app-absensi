<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            [
                'user_id' => 2,
                'nip' => '123456789',
                'fullname' => 'Siti Rahayu',
                'gender' => 0,
                'phone_number' => '089876543210',
                'level' => '1',
                'status' => 1,
            ],
            [
                'user_id' => 3,
                'nip' => '987654321',
                'fullname' => 'Agus Setiawan',
                'gender' => 1,
                'phone_number' => '088765432109',
                'level' => '2',
                'status' => 1,
            ],
            [
                'user_id' => 4,
                'nip' => '234567890',
                'fullname' => 'Dewi Susanti',
                'gender' => 0,
                'phone_number' => '087890123456',
                'level' => '3',
                'status' => 1,
            ],
            [
                'user_id' => 5,
                'nip' => '876543210',
                'fullname' => 'Joko Prabowo',
                'gender' => 1,
                'phone_number' => '083456789012',
                'level' => '4',
                'status' => 1,
            ],
            [
                'user_id' => 6,
                'nip' => '345678901',
                'fullname' => 'Rina Fitriani',
                'gender' => 0,
                'phone_number' => '082345678901',
                'level' => '5',
                'status' => 1,
            ],
            [
                'user_id' => 7,
                'nip' => '789012345',
                'fullname' => 'Irfan Hermawan',
                'gender' => 1,
                'phone_number' => '081112223334',
                'level' => '6',
                'status' => 1,
            ],
            [
                'user_id' => 8,
                'nip' => '456789012',
                'fullname' => 'Anisa Putri',
                'gender' => 0,
                'phone_number' => '089012345678',
                'level' => 'Agama',
                'status' => 1,
            ],
            [
                'user_id' => 9,
                'nip' => '210987654',
                'fullname' => 'Rudi Santoso',
                'gender' => 1,
                'phone_number' => '087654321098',
                'level' => 'Olahraga',
                'status' => 1,
            ],
            [
                'user_id' => 10,
                'nip' => '567890123',
                'fullname' => 'Maya Wati',
                'gender' => 0,
                'phone_number' => '085678901234',
                'level' => 'Matematika',
                'status' => 1,
            ],
            [
                'user_id' => 11,
                'nip' => '321098765',
                'fullname' => 'Hadi Susanto',
                'gender' => 1,
                'phone_number' => '081234567890',
                'level' => 'IPA',
                'status' => 1,
            ],

            
        ];

        foreach ($teachers as $key => $teacher) {
            Teacher::create($teacher);
        }
    }
}
