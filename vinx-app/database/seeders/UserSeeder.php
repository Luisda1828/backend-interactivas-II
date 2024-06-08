<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'user_name' => 'Alice',
            'user_lastname' => 'Johnson',
            'user_birth' => '1998-05-12',
            'user_email' => 'alice.johnson@example.com',
            'user_password' => bcrypt('password123'),
            'user_career' => 'Computer Science',
            'user_studentCarne' => 'CS2023001',
            'user_illness' => 'None',
            'sleep_time' => '8 hours',
            'excercise_time' => '30 minutes',
            'id_type' => 3, 
        ]);
        
        User::create([
            'user_name' => 'Bob',
            'user_lastname' => 'Smith',
            'user_birth' => '2000-09-20',
            'user_email' => 'bob.smith@example.com',
            'user_password' => bcrypt('securepassword'),
            'user_career' => 'Mechanical Engineering',
            'user_studentCarne' => 'ME2023002',
            'user_illness' => 'Asthma',
            'sleep_time' => '7 hours',
            'excercise_time' => '45 minutes',
            'id_type' => 1, 
        ]);
        
        User::create([
            'user_name' => 'Charlie',
            'user_lastname' => 'Brown',
            'user_birth' => '1999-12-01',
            'user_email' => 'charlie.brown@example.com',
            'user_password' => bcrypt('mypassword'),
            'user_career' => 'Graphic Design',
            'user_studentCarne' => 'GD2023003',
            'user_illness' => 'Diabetes',
            'sleep_time' => '6 hours',
            'excercise_time' => '1 hour',
            'id_type' => 1, 
        ]);
    }
}
