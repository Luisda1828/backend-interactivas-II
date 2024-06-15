<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHasCourse extends Model
{
    use HasFactory;
protected $fillable = ['id', 'id_user', 'id_course', 'progress'];

public function course()
{
    return $this->belongsTo(Course::class, 'id_course');
}

}
