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
            'eve_title' => 'Taller de Programación Básica',
            'eve_id_course' => 1,
            'eve_description' => 'Un taller práctico para iniciar en la programación.',
            'id_etiqueta' => 1,
            'id_category' => 1,
            'eve_image' => 'taller_programacion_basica.jpg',
            'eve_datetime' => '2024-06-28T09:00:00',
        ]);

        Event::create([
            'eve_title' => 'Programación Orientada a Objetos',
            'eve_id_course' => 1,
            'eve_description' => 'Conceptos fundamentales de la programación orientada a objetos.',
            'id_etiqueta' => 2,
            'id_category' => 2,
            'eve_image' => 'programacion_oop.jpg',
            'eve_datetime' => '2024-07-03T14:30:00',
        ]);

        // Eventos para el curso 2
        Event::create([
            'eve_title' => 'Introducción al Desarrollo Web',
            'eve_id_course' => 2,
            'eve_description' => 'Descubre los principios básicos del desarrollo web con Laravel.',
            'id_etiqueta' => 3,
            'id_category' => 3,
            'eve_image' => 'intro_desarrollo_web.jpg',
            'eve_datetime' => '2024-07-06T10:00:00',
        ]);

        Event::create([
            'eve_title' => 'Aplicaciones Web con Laravel',
            'eve_id_course' => 2,
            'eve_description' => 'Aprende a construir aplicaciones web modernas con Laravel.',
            'id_etiqueta' => 4,
            'id_category' => 4,
            'eve_image' => 'laravel_web.avif',
            'eve_datetime' => '2024-07-10T15:00:00',
        ]);

        // Eventos para el curso 3
        Event::create([
            'eve_title' => 'Taller de SQL Básico',
            'eve_id_course' => 3,
            'eve_description' => 'Aprende a consultar bases de datos utilizando SQL.',
            'id_etiqueta' => 5,
            'id_category' => 1,
            'eve_image' => 'sql_basico.png',
            'eve_datetime' => '2024-07-12T09:30:00',
        ]);

        Event::create([
            'eve_title' => 'Optimización de Consultas SQL',
            'eve_id_course' => 3,
            'eve_description' => 'Técnicas avanzadas para optimizar el rendimiento de las consultas SQL.',
            'id_etiqueta' => 6,
            'id_category' => 2,
            'eve_image' => 'sql_optimizacion.jpeg',
            'eve_datetime' => '2024-07-15T11:00:00',
        ]);

        // Eventos para el curso 4
        Event::create([
            'eve_title' => 'Introducción a la Inteligencia Artificial',
            'eve_id_course' => 4,
            'eve_description' => 'Fundamentos y aplicaciones de la inteligencia artificial.',
            'id_etiqueta' => 1,
            'id_category' => 3,
            'eve_image' => 'intro_ia.jpg',
            'eve_datetime' => '2024-07-18T13:30:00',
        ]);

        Event::create([
            'eve_title' => 'Taller de Machine Learning',
            'eve_id_course' => 4,
            'eve_description' => 'Implementación de algoritmos de machine learning en Python.',
            'id_etiqueta' => 2,
            'id_category' => 4,
            'eve_image' => 'ml_taller.webp',
            'eve_datetime' => '2024-07-20T10:00:00',
        ]);

        // Eventos para el curso 5
        Event::create([
            'eve_title' => 'Desarrollo de Aplicaciones Móviles',
            'eve_id_course' => 5,
            'eve_description' => 'Construcción de aplicaciones móviles para Android e iOS.',
            'id_etiqueta' => 3,
            'id_category' => 1,
            'eve_image' => 'movil_desarrollo.jpg',
            'eve_datetime' => '2024-07-25T08:30:00',
        ]);

        Event::create([
            'eve_title' => 'Taller de Flutter',
            'eve_id_course' => 5,
            'eve_description' => 'Aprende a desarrollar aplicaciones móviles con Flutter.',
            'id_etiqueta' => 4,
            'id_category' => 2,
            'eve_image' => 'flutter_taller.png',
            'eve_datetime' => '2024-07-28T14:00:00',
        ]);

        // Eventos para el curso 6
        Event::create([
            'eve_title' => 'Introducción a la Ciberseguridad',
            'eve_id_course' => 6,
            'eve_description' => 'Conceptos básicos de ciberseguridad y protección de datos.',
            'id_etiqueta' => 5,
            'id_category' => 3,
            'eve_image' => 'intro_ciberseguridad.webp',
            'eve_datetime' => '2024-08-02T10:30:00',
        ]);

        Event::create([
            'eve_title' => 'Prácticas de Seguridad Informática',
            'eve_id_course' => 6,
            'eve_description' => 'Taller sobre buenas prácticas en seguridad informática.',
            'id_etiqueta' => 6,
            'id_category' => 4,
            'eve_image' => 'seguridad_practicas.jpg',
            'eve_datetime' => '2024-08-05T16:00:00',
        ]);

        // Eventos para el curso 7
        Event::create([
            'eve_title' => 'Redes de Computadoras Básicas',
            'eve_id_course' => 7,
            'eve_description' => 'Introducción a las redes de computadoras y su configuración.',
            'id_etiqueta' => 1,
            'id_category' => 1,
            'eve_image' => 'redes_basicas.jpg',
            'eve_datetime' => '2024-08-10T09:00:00',
        ]);

        Event::create([
            'eve_title' => 'Seguridad en Redes de Computadoras',
            'eve_id_course' => 7,
            'eve_description' => 'Técnicas de seguridad para proteger redes de computadoras.',
            'id_etiqueta' => 2,
            'id_category' => 2,
            'eve_image' => 'seguridad_redes.jpg',
            'eve_datetime' => '2024-08-13T14:30:00',
        ]);

        // Eventos para el curso 8
        Event::create([
            'eve_title' => 'Estructuras de Datos y Algoritmos',
            'eve_id_course' => 8,
            'eve_description' => 'Exploración de estructuras de datos y algoritmos esenciales.',
            'id_etiqueta' => 3,
            'id_category' => 3,
            'eve_image' => 'estructuras_datos.jpg',
            'eve_datetime' => '2024-08-18T10:00:00',
        ]);

        Event::create([
            'eve_title' => 'Taller de Algoritmos Avanzados',
            'eve_id_course' => 8,
            'eve_description' => 'Implementación de algoritmos avanzados en diferentes lenguajes.',
            'id_etiqueta' => 4,
            'id_category' => 4,
            'eve_image' => 'algoritmos_avanzados.jpeg',
            'eve_datetime' => '2024-08-21T15:00:00',
        ]);

        // Eventos para el curso 9
        Event::create([
            'eve_title' => 'Introducción a Python',
            'eve_id_course' => 9,
            'eve_description' => 'Curso introductorio sobre la programación en Python.',
            'id_etiqueta' => 5,
            'id_category' => 1,
            'eve_image' => 'intro_python.webp',
            'eve_datetime' => '2024-08-24T11:30:00',
        ]);

        Event::create([
            'eve_title' => 'Proyectos en Python',
            'eve_id_course' => 9,
            'eve_description' => 'Desarrolla proyectos prácticos utilizando Python.',
            'id_etiqueta' => 6,
            'id_category' => 2,
            'eve_image' => 'proyectos_python.jpg',
            'eve_datetime' => '2024-08-27T13:00:00',
        ]);

        // Eventos para el curso 10
        Event::create([
            'eve_title' => 'Sistemas Operativos en Profundidad',
            'eve_id_course' => 10,
            'eve_description' => 'Estudio de los sistemas operativos y su funcionamiento interno.',
            'id_etiqueta' => 3,
            'id_category' => 4,
            'eve_image' => 'sistemas_operativos.jpg',
            'eve_datetime' => '2024-07-30T14:30:00',
        ]);

        Event::create([
            'eve_title' => 'Taller Avanzado de Sistemas Operativos',
            'eve_id_course' => 10,
            'eve_description' => 'Exploración de conceptos avanzados en sistemas operativos.',
            'id_etiqueta' => 1,
            'id_category' => 2,
            'eve_image' => 'sistemas_operativos_avanzado.png',
            'eve_datetime' => '2024-08-10T10:00:00',
        ]);
    }
}