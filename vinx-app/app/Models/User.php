<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class User extends Model
class User extends Authenticatable
{
    // use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = ['user_id', 'user_name', 'user_lastname', 'user_user_name', 'user_email', 'user_password', 'user_career','user_img', 'user_studentCarne', 'user_illness', 'sleep_time', 'excercise_time', 'id_type'];
    protected $primaryKey = 'user_id';
}
