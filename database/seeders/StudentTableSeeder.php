<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'nis' => '172121',
                'user_id' => '10',
                'nisn' => ''
            ],
        ];

        foreach ($students as $key => $student) {
            Student::create($students);
        }
    }
}
