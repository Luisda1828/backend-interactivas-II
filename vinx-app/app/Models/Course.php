<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['cour_id', 'cour_name', 'cour_teacher_id', 'cour_semester', 'cour_year'];
    protected $primaryKey = 'cour_id';


    public function events()
    {
        return $this->hasMany(Event::class, 'eve_id_course');
    }
}
