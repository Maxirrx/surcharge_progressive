<?php

namespace App\Repositories;

use App\Models\favorites;
use App\Models\workout_exercice;
use App\Models\workout_template;

class WorkoutTemplateRepositorie{
    function getnamebyid($id){
        $nextsceance = workout_template::where("id" , $id)->select("name", "id")->first();
        return $nextsceance;
    }

    function getfavori4($id){
        $favori = workout_template::whereIn(
            'id',
            favorites::where('user_id', $id)->pluck('workout_template_id'))
            ->limit(4)
            ->pluck('name');
        return $favori;
    }

    function getfavori($id){
        $favori = workout_template::whereIn(
            'id',
            favorites::where('user_id', $id)->pluck('workout_template_id'))
            ->orderBy('id')
            ->select('id','name')
            ->get();
        return $favori;
    }

    function nbexoparsceance($id){
        $nbexo = workout_exercice::where("workout_template_id" , $id)
            ->count();

        return $nbexo;
    }
}
