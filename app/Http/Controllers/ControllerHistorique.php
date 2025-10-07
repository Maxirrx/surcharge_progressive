<?php

namespace App\Http\Controllers;

use App\Models\performance;
use App\Models\workout_session;
use App\Models\workout_template;
use App\Repositories\WorkoutSessionRepositorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerHistorique extends Controller
{


        public function index()
        {
            $workoutsessionrepositorie = new WorkoutSessionRepositorie();
            $user = Auth::user();
            $sceanceIds = workout_session::where('user_id', $user->id)
                ->orderBy('dateofworkout')
                ->pluck('id');

            $totalpoidsexodebut = performance::whereIn('workout_id', $sceanceIds)
                ->select('workout_id', performance::raw('SUM(poids * nb_repetition) as total_poids'))
                ->groupBy('workout_id')
                ->orderBy('workout_id')
                ->pluck('total_poids');


            return view('historique',[
                "totalpoidsexodebut" => $totalpoidsexodebut,
            ]);
        }


}
