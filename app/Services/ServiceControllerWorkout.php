<?php

namespace App\Services;

use App\Repositories\WorkoutTemplateRepositorie;
use App\Repositories\ExerciceRepositorie;

class ServiceControllerWorkout
{
    function tableauworkout($user_id){

        $workouttemplaterepositorie = new WorkoutTemplateRepositorie();

        $mesworkouttemplates = $workouttemplaterepositorie->getfavori($user_id);
        $nbparseance = [];
        foreach($mesworkouttemplates as $workouttemplate){

            $nbexoparseance = $workouttemplaterepositorie->nbexoparsceance($workouttemplate->id);
            $nbparseance[$workouttemplate->id] = [
                'id'   => $workouttemplate->id,
                'name' => $workouttemplate->name,
                'nb'   => $nbexoparseance,
            ];

        }
        return $nbparseance;
    }

    function tableauexercice($user_id){

        $exercicerepositorie = new ExerciceRepositorie();

        $mesexo = $exercicerepositorie->getallexercicebyuser($user_id);

        return $mesexo;
    }
}
