<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Course::create([
            'cour_name' => 'Introducción a la Programación',
            'cour_teacher_id' => 1,
            'cour_semester' => 1,
            'cour_year' => 2024,
        ]);

        Course::create([
            'cour_name' => 'Desarrollo Web con Laravel',
            'cour_teacher_id' => 1,
            'cour_semester' => 2,
            'cour_year' => 2024,
        ]);

        Course::create([
            'cour_name' => 'Bases de Datos SQL',
            'cour_teacher_id' => 1,
            'cour_semester' => 3,
            'cour_year' => 2024,
        ]);

        Course::create([
            'cour_name' => 'Inteligencia Artificial',
            'cour_teacher_id' => 1,
            'cour_semester' => 1,
            'cour_year' => 2024,
        ]);

        Course::create([
            'cour_name' => 'Desarrollo de Aplicaciones Móviles',
            'cour_teacher_id' => 1,
            'cour_semester' => 2,
            'cour_year' => 2024,
        ]);

        Course::create([
            'cour_name' => 'Ciberseguridad',
            'cour_teacher_id' => 1,
            'cour_semester' => 3,
            'cour_year' => 2024,
        ]);

        Course::create([
            'cour_name' => 'Redes de Computadoras',
            'cour_teacher_id' => 1,
            'cour_semester' => 1,
            'cour_year' => 2024,
        ]);

        Course::create([
            'cour_name' => 'Algoritmos y Estructuras de Datos',
            'cour_teacher_id' => 1,
            'cour_semester' => 2,
            'cour_year' => 2024,
        ]);

        Course::create([
            'cour_name' => 'Programación en Python',
            'cour_teacher_id' => 1,
            'cour_semester' => 3,
            'cour_year' => 2024,
        ]);

        Course::create([
            'cour_name' => 'Sistemas Operativos',
            'cour_teacher_id' => 1,
            'cour_semester' => 1,
            'cour_year' => 2024,
        ]);
    }

}
