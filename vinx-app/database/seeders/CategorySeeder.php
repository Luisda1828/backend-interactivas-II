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
           
            'cat_name' => 'Carrera',
            
            
        ]);

        Category::create([
           
            'cat_name' => 'Curso',
            
            
        ]);

        Category::create([
           
            'cat_name' => 'Universidad',
            
            
        ]);

        Category::create([
           
            'cat_name' => 'Estudiante',
            
            
        ]);
    }
}
