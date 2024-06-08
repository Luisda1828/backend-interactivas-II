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
            
            'cour_name' => 'Introduction to Programming',
            'cour_teacher_id' => 3,
            'cour_semester' => 'Fall',
            'cour_year' => 2023,
        ]);
        
        Course::create([
            
            'cour_name' => 'Introduction to Programming',
            'cour_teacher_id' => 3,
            'cour_semester' => 'Fall',
            'cour_year' => 2023,
        ]);
        
        Course::create([
            
            'cour_name' => 'Advanced Mathematics',
            'cour_teacher_id' => 3,
            'cour_semester' => 'Spring',
            'cour_year' => 2023,
        ]);
        
        Course::create([
            
            'cour_name' => 'Physics for Engineers',
            'cour_teacher_id' => 3,
            'cour_semester' => 'Fall',
            'cour_year' => 2024,
        ]);
        
        Course::create([
            
            'cour_name' => 'History of Art',
            'cour_teacher_id' => 3,
            'cour_semester' => 'Spring',
            'cour_year' => 2024,
        ]);
        
        Course::create([
           
            'cour_name' => 'Chemistry 101',
           'cour_teacher_id' => 3,
            'cour_semester' => 'Fall',
            'cour_year' => 2023,
        ]);
    }

}
