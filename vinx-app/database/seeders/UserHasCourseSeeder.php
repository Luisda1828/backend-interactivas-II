<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserhasCourse;


class UserHasCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserHasCourse::create([
            'id_user' => 2,
            'id_course' => 1,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 2,
            'id_course' => 3,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 2,
            'id_course' => 5,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 2,
            'id_course' => 7,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 2,
            'id_course' => 9,
            'progress' => 0,
        ]);

        // Usuario 3
        UserHasCourse::create([
            'id_user' => 3,
            'id_course' => 2,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 3,
            'id_course' => 4,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 3,
            'id_course' => 6,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 3,
            'id_course' => 8,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 3,
            'id_course' => 10,
            'progress' => 0,
        ]);

        // Usuario 4
        UserHasCourse::create([
            'id_user' => 4,
            'id_course' => 1,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 4,
            'id_course' => 3,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 4,
            'id_course' => 5,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 4,
            'id_course' => 7,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 4,
            'id_course' => 9,
            'progress' => 0,
        ]);

        // Usuario 5
        UserHasCourse::create([
            'id_user' => 5,
            'id_course' => 2,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 5,
            'id_course' => 4,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 5,
            'id_course' => 6,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 5,
            'id_course' => 8,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 5,
            'id_course' => 10,
            'progress' => 0,
        ]);

        // Usuario 6
        UserHasCourse::create([
            'id_user' => 6,
            'id_course' => 1,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 6,
            'id_course' => 3,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 6,
            'id_course' => 5,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 6,
            'id_course' => 7,
            'progress' => 0,
        ]);
        UserHasCourse::create([
            'id_user' => 6,
            'id_course' => 9,
            'progress' => 0,
        ]);
    }
}
