<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHasEvent extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_user', 'id_events', 'estado'];

    public function events()
    {
        return $this->belongsToMany(Event::class, 'UserHasEvents', 'id_user', 'id_events');
    }
}
