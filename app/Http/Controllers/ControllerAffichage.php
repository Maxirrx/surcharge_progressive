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

class ControllerAffichage extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        $nbsceances = workout_session::where('user_id', $user->id)->count();

        ////
        $date30DaysAgo = Carbon::now()->subDays(30);
        $sessionIds = workout_session::where('user_id', $user->id)
            ->where('dateofworkout', '>=', $date30DaysAgo)
            ->pluck('id');
        $totalpoids = Performance::whereIn('workout_id', $sessionIds)->sum('poids');
        ////
        ////
        $end = Carbon::now()->endOfDay();;
        $start = Carbon::now()->subYear()->startOfWeek(Carbon::MONDAY);
        $totaljourdelannee = CarbonPeriod::create($start, '1day',$end);
        $totalsceancedelannee = workout_session::where('user_id', $user->id)
            ->whereBetween('dateofworkout', [$start, $end])
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
        $top3 = $this->top3(5, $user);
        ////
        ////
        $favori = workout_template::whereIn(
            'id',
            favorites::where('user_id', $user->id)->pluck('workout_template_id')
        )->pluck('name');

        return view('menu', [
            'nbsceances' => $nbsceances,
            'user' => $user,
            'totalpoids' => $totalpoids,
            'totalsceancedelannee' => $totalsceancedelannee,
            'jourdelanneesemaine' => $jourdelanneesemaine,
            'top3' => $top3,
            'favori' => $favori,
        ]);
    }

    public function top3(int $lastday,User $user)
    {
        $programmeuser = workout_template::where('user_id', $user->id)->pluck('id');
        $evolution = [];
        foreach ($programmeuser as $programme) {
            $sessions = workout_session::where('workout_id', $programme)
                ->orderBy('dateofworkout')
                ->limit(10)
                ->pluck('id');

            if ($sessions->count() < $lastday) {
                return false;
            }

            $lastsession = $sessions[0];
            $fisrtsession = $sessions[$lastday-1];

            $lastPerformances = Performance::where('workout_id', $lastsession)->get();
            $tenthPerformances = Performance::where('workout_id', $fisrtsession)->get();

            $lastData = $lastPerformances->groupBy('exercices_id')->map(function ($group) {
                return $group->sum('poids');
            });

            $tenthData = $tenthPerformances->groupBy('exercices_id')->map(function ($group) {
                return $group->sum('poids');
            });

            foreach ($lastData as $exerciceId => $lastPoids) {
                $oldPoids = $tenthData->get($exerciceId, 0);

                if ($oldPoids == 0) {
                    $percentChange = 100;
                } else {
                    $percentChange = (($lastPoids - $oldPoids) / $oldPoids) * 100;
                }

                if (!isset($evolution[$exerciceId])) {
                    $evolution[$exerciceId] = $percentChange;
                } else {
                    $evolution[$exerciceId] = max($evolution[$exerciceId], $percentChange);
                }
            }
        }
        return collect($evolution)
            ->sortDesc()
            ->take(3);
    }
}


