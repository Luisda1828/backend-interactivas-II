<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'tag_name'=>'Tarea',
            'tag_porcentage'=>'10'
        ]);

        Tag::create([
            'tag_name'=>'Comunicado',
            'tag_porcentage'=>'0'
        ]);

        Tag::create([
            'tag_name'=>'Proyectos',
            'tag_porcentage'=>'35'
        ]);

        Tag::create([
            'tag_name'=>'Examenes',
            'tag_porcentage'=>'35'
        ]);

        Tag::create([
            'tag_name'=>'Quices',
            'tag_porcentage'=>'10'
        ]);

        Tag::create([
            'tag_name'=>'Presentaciones',
            'tag_porcentage'=>'10'
        ]);
    }
}
