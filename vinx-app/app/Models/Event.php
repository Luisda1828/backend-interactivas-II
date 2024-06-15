<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['eve_id', 'eve_title', 'eve_id_course', 'eve_description', 'id_etiqueta', 'id_category', 'eve_image', 'eve_datetime'];
    protected $primaryKey = 'eve_id';


    public function course()
    {
        return $this->belongsTo(Course::class, 'eve_id_course');
    }
}
