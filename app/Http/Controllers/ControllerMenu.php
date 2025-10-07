<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Repositories\PerformanceRepositorie;
use App\Repositories\WorkoutTemplateRepositorie;
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
use App\Http\Controllers\FunctionControllerjson;
use App\Repositories\WorkoutSessionRepositorie;
use App\Services\ServiceControllerMenu;



class ControllerMenu extends Controller
{
    public function index(){
        $workouttempplaterepositorie = new WorkoutTemplateRepositorie;
        $workoutsessionrepositorie = new WorkoutSessionRepositorie();
        $performancerepositorie = new performancerepositorie();
        $servicecontrollermenu = new ServiceControllerMenu();

        $user = Auth::user();
        $date30DaysAgo = Carbon::now()->subDays(30);

        $nbsceances = $workoutsessionrepositorie->countworkoutsessionXday($user->id, $date30DaysAgo);

        $sessionIds = $workoutsessionrepositorie->getallidworkoutsessionXday($user->id, $date30DaysAgo);
        $totalpoids = $performancerepositorie->totalpoidsxday($sessionIds);



        $end = Carbon::now()->endOfDay();;
        $start = Carbon::now()->subYear()->startOfWeek(Carbon::MONDAY);

        $totalsceancedelannee = $workoutsessionrepositorie->allseancefinibeetweenbyuser($start, $end,$user->id);
        $jourdelanneesemaine = $servicecontrollermenu->orderdaybyweekbeetween($start, $end);


        ////
        ////
        $functioncontroller = new FunctionControllerjson();
        $top3 = $functioncontroller->top3($user->id, 5);
        ////
        ////
        $favori = $workouttempplaterepositorie->getfavori4($user->id);

        $phrase =__('motivation');
        $randomkey = array_rand($phrase);
        $randomphrase = $phrase[$randomkey];

        $nextsceanceid = $workoutsessionrepositorie->nextseancebyuser($user->id);
        $nextsceance = $workouttempplaterepositorie->getnamebyid($nextsceanceid);

        $graphique = $functioncontroller->graphique($user->id, 5, 6);

        return view('menu', [
            'nbsceances' => $nbsceances,
            'user' => $user,
            'totalpoids' => $totalpoids,
            'totalsceancedelannee' => $totalsceancedelannee,
            'jourdelanneesemaine' => $jourdelanneesemaine,
            'top3' => $top3,
            'favori' => $favori,
            'nextsceance' => $nextsceance,
            'graphique' => $graphique,
            'randomphrase' => $randomphrase,
        ]);
    }
}


