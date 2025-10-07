<?php


namespace App\Repositories;

use App\Models\workout_session;
use Carbon\Carbon;

class WorkoutSessionRepositorie {

    //nb de séance réalisé en x jours
    function countworkoutsessionXday($user_id, $day_ago){
        $nbsceances = workout_session::where('user_id', $user_id)
            ->where('dateofworkout', '>=', $day_ago)
            ->where('isfinished', true)
            ->count();
        return $nbsceances;
    }

    function getallidworkoutsessionXday($user_id, $day_ago){
        $sessionIds = workout_session::where('user_id', $user_id)
            ->where('dateofworkout', '>=', $day_ago)
            ->where('isfinished', true)
            ->pluck('id');
        return $sessionIds;
    }

    function getallidworkoutsession($user_id){
        $sessionIds = workout_session::where('user_id', $user_id)
            ->orderBy('dateofworkout')
            ->where('isfinished', true)
            ->pluck('id', 'dateofworkout');
        return $sessionIds;
    }

    function nextseancebyuser($user_id){
        $nextsceanceid = workout_session::where('dateofworkout', '>=', Carbon::now())
            ->where('isfinished', false)
            ->where('user_id' , $user_id)
            ->orderBy('dateofworkout', 'asc')
            ->pluck('workout_id')
            ->first();
        return $nextsceanceid;
    }

    function allseancefinibeetweenbyuser($start, $end, $user_id){
        $allseancefini = workout_session::where('user_id', $user_id)
            ->whereBetween('dateofworkout', [$start, $end])
            ->where('isfinished', true)
            ->pluck('dateofworkout');
        return $allseancefini;
    }

    function allseanceavenirbeetweenbyuser($start, $end, $user_id){
        $allseancefini = workout_session::where('user_id', $user_id)
            ->whereBetween('dateofworkout', [$start, $end])
            ->where('isfinished', false)
            ->pluck('dateofworkout');
        return $allseancefini;
    }


}
