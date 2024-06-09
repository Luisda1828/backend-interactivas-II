<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'user_name', 'user_lastname', 'user_birth', 'user_email', 'user_password', 'user_career', 'user_studentCarne', 'user_illness', 'sleep_time', 'excercise_time', 'id_type'];
    protected $primaryKey = 'user_id';
}
