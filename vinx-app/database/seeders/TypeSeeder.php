<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'type_name' => 'admin'
        ]);
        Type::create([
            'type_name' => 'student'
        ]);
        Type::create([
            'type_name' => 'teacher'
        ]);
    }
}
