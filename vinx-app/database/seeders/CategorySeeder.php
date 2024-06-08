<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
           
            'cat_name' => 'Evento',
            'cat_image' => '',
            'cat_Description' => '',
        ]);

        Category::create([
           
            'cat_name' => 'Tarea',
            'cat_image' => '',
            'cat_Description' => '',
        ]);

        Category::create([
           
            'cat_name' => 'Comunicado',
            'cat_image' => '',
            'cat_Description' => '',
        ]);
    }
}
