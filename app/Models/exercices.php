<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class exercices extends Model
{
    protected $table = 'exercices';

    protected $fillable = ['name', 'muscle_id', 'user_id', 'public'];
    public $timestamps = false;
}
