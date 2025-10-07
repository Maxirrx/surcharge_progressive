<?php

namespace App\Http\Controllers;

use App\Models\exercices;
use App\Repositories\ExerciceRepositorie;
use App\Repositories\WorkoutSessionRepositorie;
use App\Repositories\WorkoutTemplateRepositorie;
use App\Services\ServiceControllerMenu;
use App\Services\ServiceControllerWorkout;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerWorkout extends Controller
{
    public function index(){

        $workoutsessionrepositorie = new WorkoutSessionRepositorie();
        $exercicesrepositorie = new ExerciceRepositorie();
        $servicecontrollermenu = new ServiceControllerMenu();

        $user = Auth::user();

        $servicecontrollerworkout = new ServiceControllerWorkout();
        $tableauworkout = $servicecontrollerworkout->tableauworkout($user->id);
        $tableauexercice = $exercicesrepositorie->getallexercicebyuser($user->id);



        $start = Carbon::now()->startOfWeek(Carbon::MONDAY);;
        $end = Carbon::now()->addYear()->endOfDay();
        $totalsceancedelannee = $workoutsessionrepositorie->allseanceavenirbeetweenbyuser($start, $end,$user->id);
        $jourdelanneesemaine = $servicecontrollermenu->orderdaybyweekbeetween($start, $end);

        return view('workout',[
            'tableauworkout'=>$tableauworkout,
            'tableauexercice'=>$tableauexercice,
            'totalsceancedelannee' => $totalsceancedelannee,
            'jourdelanneesemaine' => $jourdelanneesemaine,
        ]);
    }
}
