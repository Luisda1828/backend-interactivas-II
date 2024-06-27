<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserhasEvent;
use App\Models\UserhasCourse;
use App\Models\Event;

class UserHasEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Obtener los cursos de cada usuario
        $userCourses = UserhasCourse::all();

        foreach ($userCourses as $userCourse) {
            $courseId = $userCourse->id_course;

            // Obtener eventos asociados al curso
            $events = Event::where('eve_id_course', $courseId)->get();

            foreach ($events as $event) {
                // Crear la relación UserhasEvent para cada usuario y evento
                UserhasEvent::create([
                    'id_user' => $userCourse->id_user,
                    'id_event' => $event->id,
                    'estado' => 'InProgress', // Estado por defecto, puedes ajustarlo según tus necesidades
                ]);
            }
        }
    }
}
