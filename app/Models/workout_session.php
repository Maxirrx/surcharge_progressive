<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class workout_session extends Model
{
    protected $table = 'workout_session';

    public $timestamps = false;

    protected $fillable = ['user_id', 'workout_id', 'dateofworkout'];
}
