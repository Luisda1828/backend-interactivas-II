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
            'user_name' => 'Jorge Andrey',
            'user_lastname' => 'Miranda Loria',
            'user_user_name' => 'MirandaJorge',
            'user_img' => '1676071144724.jfif',
            'user_email' => 'jorgemiranda@gmail.com',
            'user_password' => bcrypt('miranda123'),
            'user_career' => 'ITM',
            'user_studentCarne' => 'ITM',
            'user_illness' => 'None',
            'sleep_time' => '8 hours',
            'excercise_time' => '30 minutes',
            'id_type' => 3, 
        ]);
        
        User::create([
            'user_name' => 'Luis David',
            'user_lastname' => 'Villegas Herrera',
            'user_user_name' => 'LuisVillegas',
            'user_img' => 'luius.png',
            'user_email' => 'luis.villegas@example.com',
            'user_password' => bcrypt('useruser'),
            'user_career' => 'Engineering',
            'user_studentCarne' => 'LV2023001',
            'user_illness' => 'None',
            'sleep_time' => '8 hours',
            'excercise_time' => '30 minutes',
            'id_type' => 2, 
        ]);
        
        User::create([
            'user_name' => 'Gustavo',
            'user_lastname' => 'Acosta Fernández',
            'user_user_name' => 'GustavoAcosta',
            'user_img' => 'https://randomuser.me/api/portraits/men/2.jpg',
            'user_email' => 'taus.png',
            'user_password' => bcrypt('useruser'),
            'user_career' => 'Computer Science',
            'user_studentCarne' => 'GA2023002',
            'user_illness' => 'None',
            'sleep_time' => '7 hours',
            'excercise_time' => '45 minutes',
            'id_type' => 2,
        ]);
        
        User::create([
            'user_name' => 'Jeremy',
            'user_lastname' => 'Guzmán Vargas',
            'user_user_name' => 'JeremyGuzman',
            'user_img' => 'jereus.png',
            'user_email' => 'jeremy.guzman@example.com',
            'user_password' => bcrypt('useruser'),
            'user_career' => 'Electrical Engineering',
            'user_studentCarne' => 'JG2023003',
            'user_illness' => 'Diabetes',
            'sleep_time' => '6 hours',
            'excercise_time' => '60 minutes',
            'id_type' => 2,
        ]);
        
        User::create([
            'user_name' => 'Drexler',
            'user_lastname' => 'Guzmán Cruz',
            'user_user_name' => 'DrexlerGuzman',
            'user_img' => 'drexus.png',
            'user_email' => 'drexler.guzman@example.com',
            'user_password' => bcrypt('useruser'),
            'user_career' => 'Industrial Engineering',
            'user_studentCarne' => 'DG2023004',
            'user_illness' => 'None',
            'sleep_time' => '7.5 hours',
            'excercise_time' => '45 minutes',
            'id_type' => 2,
        ]);
        
        User::create([
            'user_name' => 'Joyner',
            'user_lastname' => 'Meneses Rocha',
            'user_user_name' => 'JoynerMeneses',
            'user_img' => 'meneus.png',
            'user_email' => 'joyner.meneses@example.com',
            'user_password' => bcrypt('useruser'),
            'user_career' => 'Chemical Engineering',
            'user_studentCarne' => 'JM2023005',
            'user_illness' => 'Asthma',
            'sleep_time' => '8 hours',
            'excercise_time' => '30 minutes',
            'id_type' => 2,
        ]);
        
    }
}