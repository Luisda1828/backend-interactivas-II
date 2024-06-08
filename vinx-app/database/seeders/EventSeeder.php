<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'eve_title' => 'Intro to Programming Workshop',
            'eve_id_course' => 1,
            'eve_description' => 'A hands-on workshop to get started with programming.',
            'id_etiqueta' => 1,
            'id_category' => 1,
            'eve_image' => '',
            'eve_datetime' => '2024-06-10T14:30:00',
        ]);
        
        Event::create([
            'eve_title' => 'Math Bootcamp',
            'eve_id_course' => 2,
            'eve_description' => 'An intensive bootcamp to master advanced mathematics.',
            'id_etiqueta' => 1,
            'id_category' => 2,
            'eve_image' => '',
            'eve_datetime' => '2024-06-11T14:30:00',
        ]);
        
        Event::create([
            'eve_title' => 'Engineering Physics Seminar',
            'eve_id_course' => 3,
            'eve_description' => 'A seminar on the latest developments in physics for engineers.',
            'id_etiqueta' => 1,
            'id_category' => 3,
            'eve_image' => '',
            'eve_datetime' => '2024-06-12T14:30:00',
        ]);
        
        Event::create([
            'eve_title' => 'Art History Exhibition',
            'eve_id_course' => 4,
            'eve_description' => 'An exhibition showcasing significant art pieces through history.',
            'id_etiqueta' => 1,
            'id_category' => 3,
            'eve_image' => '',
            'eve_datetime' => '2024-06-13T14:30:00',
        ]);
        
        Event::create([
            'eve_title' => 'Chemistry Lab Tour',
            'eve_id_course' => 5,
            'eve_description' => 'A guided tour of the state-of-the-art chemistry labs.',
            'id_etiqueta' => 1,
            'id_category' => 1,
            'eve_image' => '',
            'eve_datetime' => '2024-06-12T14:30:00',
        ]);
        
        Event::create([
            'eve_title' => 'Programming Hackathon',
            'eve_id_course' => 1,
            'eve_description' => 'A hackathon for beginner programmers.',
            'id_etiqueta' => 1,
            'id_category' => 1,
            'eve_image' => '',
            'eve_datetime' => '2024-06-07T14:30:00',
           
        ]);
        
        Event::create([
            'eve_title' => 'Mathematics Conference',
            'eve_id_course' => 2,
            'eve_description' => 'A conference discussing advanced mathematical theories.',
            'id_etiqueta' => 1,
            'id_category' => 2,
            'eve_image' => '',
            'eve_datetime' => '2024-06-07T14:30:00',
        ]);
        
        Event::create([
            'eve_title' => 'Physics Symposium',
            'eve_id_course' => 3,
            'eve_description' => 'A symposium on recent advances in physics.',
            'id_etiqueta' => 1,
            'id_category' => 3,
            'eve_image' => '',
            'eve_datetime' => '2024-06-07T14:30:00',
        ]);
        
        Event::create([
            'eve_title' => 'Art History Lecture',
            'eve_id_course' => 4,
            'eve_description' => 'A lecture on the evolution of art through centuries.',
            'id_etiqueta' => 1,
            'id_category' => 2,
            'eve_image' => '',
            'eve_datetime' => '2024-06-07T14:30:00',
        ]);
        
        Event::create([
            'eve_title' => 'Chemistry Symposium',
            'eve_id_course' => 5,
            'eve_description' => 'A symposium discussing recent research in chemistry.',
            'id_etiqueta' => 1,
            'id_category' => 2,
            'eve_image' => '',
            'eve_datetime' => '2024-06-07T14:30:00',
        ]);
    }
}
