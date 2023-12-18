<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = [
            [
                'semester_id' => 5,
                'teacher_id' => 1,
                'name' => '1A',
                'slug' => '1a',
                'status' => 1,
            ],
            [
                'semester_id' => 6,
                'teacher_id' => 1,
                'name' => '1A',
                'slug' => '1a',
                'status' => 1,
            ],
            [
                'semester_id' => 5,
                'teacher_id' => 2,
                'name' => '2A',
                'slug' => '2a',
                'status' => 1,
            ],
            [
                'semester_id' => 6,
                'teacher_id' => 2,
                'name' => '2A',
                'slug' => '2a',
                'status' => 1,
            ],
            [
                'semester_id' => 5,
                'teacher_id' => 3,
                'name' => '3A',
                'slug' => '3a',
                'status' => 1,
            ],
            [
                'semester_id' => 6,
                'teacher_id' => 3,
                'name' => '3A',
                'slug' => '3a',
                'status' => 1,
            ],
            [
                'semester_id' => 5,
                'teacher_id' => 4,
                'name' => '4A',
                'slug' => '4a',
                'status' => 1,
            ],
            [
                'semester_id' => 6,
                'teacher_id' => 4,
                'name' => '4A',
                'slug' => '4a',
                'status' => 1,
            ],
            [
                'semester_id' => 5,
                'teacher_id' => 5,
                'name' => '5A',
                'slug' => '5a',
                'status' => 1,
            ],
            [
                'semester_id' => 6,
                'teacher_id' => 5,
                'name' => '5A',
                'slug' => '5a',
                'status' => 1,
            ],
            [
                'semester_id' => 5,
                'teacher_id' => 6,
                'name' => '6A',
                'slug' => '6a',
                'status' => 1,
            ],
            [
                'semester_id' => 6,
                'teacher_id' => 6,
                'name' => '6A',
                'slug' => '6a',
                'status' => 1,
            ],
        ];

        foreach ($groups as $key => $group) {
            Group::create($group);
        }
    }
}
