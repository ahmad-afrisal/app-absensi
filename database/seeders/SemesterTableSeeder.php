<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $semesters = [
            [
                'name' => '2020/2021 GANJIIL',
                'slug' => '2020/2021-ganjil',
                'status' => 1,
            ],
            [
                'name' => '2020/2021 GENAP',
                'slug' => '2020/2021-genap',
                'status' => 1,
            ],
            [
                'name' => '2021/2022 GANJIIL',
                'slug' => '2021/2022-ganjil',
                'status' => 1,
            ],
            [
                'name' => '2021/2022 GENAP',
                'slug' => '2021/2022-genap',
                'status' => 1,
            ],
            [
                'name' => '2022/2023 GANJIIL',
                'slug' => '2023/2023-ganjil',
                'status' => 1,
            ],
            [
                'name' => '2022/2023 GENAP',
                'slug' => '2022/2023-genap',
                'status' => 1,
            ],
        ];

        foreach ($semesters as $key => $semester) {
            Semester::create($semester);
        }
    }
}
