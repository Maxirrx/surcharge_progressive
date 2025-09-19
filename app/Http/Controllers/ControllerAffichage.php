<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\workout_session;
use App\Models\performance;
use App\Models\workout_template;
use App\Models\favorites;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Date;

class ControllerAffichage extends Controller
{
    public function index(){
        $user = Auth::user();
        $date30DaysAgo = Carbon::now()->subDays(30);
        $nbsceances = workout_session::where('user_id', $user->id)
            ->where('dateofworkout', '>=', $date30DaysAgo)
            ->where('isfinished', true)
            ->count();

        ////
        $sessionIds = workout_session::where('user_id', $user->id)
            ->where('dateofworkout', '>=', $date30DaysAgo)
            ->where('isfinished', true)
            ->pluck('id');
        $totalpoids = Performance::whereIn('workout_id', $sessionIds)
            ->selectRaw('sum(poids * nb_repetition) as totalpoids')
            ->value('totalpoids');
        ////
        ////
        $end = Carbon::now()->endOfDay();;
        $start = Carbon::now()->subYear()->startOfWeek(Carbon::MONDAY);
        $totaljourdelannee = CarbonPeriod::create($start, '1day',$end);
        $totalsceancedelannee = workout_session::where('user_id', $user->id)
            ->whereBetween('dateofworkout', [$start, $end])
            ->where('isfinished', true)
            ->pluck('dateofworkout');
        $jourdelanneesemaine = [];

        for($i = 0; $i<ceil($totaljourdelannee->count()/7); $i++){
            $semaine = [];
            for ($j = 0; $j<7 ; $j++){
                $index = $i*7+$j;
                $jours = iterator_to_array($totaljourdelannee);
                if(isset($jours[$index])){
                    $semaine[] = $jours[$index];
                }
            }
            $jourdelanneesemaine[] = $semaine;
        }

        ////
        ////
        $top3 = false;
        ////
        ////
        $favori = workout_template::whereIn(
            'id',
            favorites::where('user_id', $user->id)->pluck('workout_template_id'))
            ->pluck('name');


        $nextsceanceid = workout_session::where('dateofworkout', '>=', Carbon::now())
            ->where('isfinished', false)
            ->orderBy('dateofworkout', 'asc')
            ->pluck('workout_id')
            ->first();

        $nextsceance = workout_template::where("id" , $nextsceanceid)->select("name", "id")->first();;

        return view('menu', [
            'nbsceances' => $nbsceances,
            'user' => $user,
            'totalpoids' => $totalpoids,
            'totalsceancedelannee' => $totalsceancedelannee,
            'jourdelanneesemaine' => $jourdelanneesemaine,
            'top3' => $top3,
            'favori' => $favori,
            'nextsceance' => $nextsceance,
        ]);
    }
}


