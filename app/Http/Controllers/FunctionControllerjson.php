<?php

namespace App\Http\Controllers;

use App\Models\performance;
use App\Models\workout_session;
use App\Models\exercices;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FunctionControllerjson extends Controller
{

    public function top3json(Request $request)
    {
        $iduser = $request->input('iduser');
        $limite = $request->input('limite');

        return $this->top3($iduser, $limite);
    }
    public function top3($iduser, $limite)
    {
        $datedebut = Carbon::now()->subDays(30);
        $datefin = Carbon::now();

        $lessceancedes30dernier = workout_session::where('user_id', $iduser)
            ->whereBetween('dateofworkout', [$datedebut, $datefin])
            ->groupBy("workout_id")
            ->pluck("workout_id");

        $evolution = [];
        foreach ($lessceancedes30dernier as $key=>$sceance) {
            $sceancedebut = workout_session::where('workout_id', $sceance)
                ->where('isfinished', true)
                ->orderBy('dateofworkout', 'desc')
                ->skip($limite-1)
                ->pluck('id')
                ->first();

            if (!$sceancedebut) {
                return false;
            }


            $sceancefin = workout_session::where('workout_id', $sceance)
                ->where('isfinished', true)
                ->orderBy('dateofworkout', 'desc')
                ->pluck('id')
                ->first();


            $totalpoidsexodebut = performance::where('workout_id', $sceancedebut)
                ->select('exercices_id', performance::raw('SUM(poids) as total_poids'))
                ->groupBy('exercices_id')
                ->pluck('total_poids', 'exercices_id');



            $totalpoidsexofin = performance::where('workout_id', $sceancefin)
                ->select('exercices_id', performance::raw('SUM(poids) as total_poids'))
                ->groupBy('exercices_id')
                ->pluck('total_poids', 'exercices_id');



            foreach ($totalpoidsexodebut as $exerciceId => $poidsDebut) {
                $poidsFin = $totalpoidsexofin[$exerciceId] ?? 0;

                $pourcentage = (($poidsFin - $poidsDebut) / $poidsDebut) * 100;

                $nomexo = exercices::where('id', $exerciceId)->pluck('name')->first();

                $evolution[$nomexo] = round($pourcentage, 2);
            }
        }
            return($evolution);
    }


    function graphiquejson(Request $request)
    {
        $iduser = $request->input('iduser');
        $limite = $request->input('limite');
        $idworkout = $request->input('idworkout');

        return $this->graphique($iduser, $limite,$idworkout);
    }
    function graphique($iduser, $limite,$idworkout){

        $sceanceIds = workout_session::where('workout_id', $idworkout)
            ->where('isfinished', true)
            ->where('user_id', $iduser)
            ->orderBy('dateofworkout', 'desc')
            ->limit($limite)
            ->pluck('id');

        if (!$sceanceIds) {
            return false;
        }



        $totalpoidsexodebut = performance::whereIn('workout_id', $sceanceIds)
            ->select('workout_id', 'exercices_id', performance::raw('SUM(poids * nb_repetition) as total_poids'))
            ->groupBy('workout_id', 'exercices_id')
            ->orderBy('workout_id')
            ->pluck('total_poids');


        return($totalpoidsexodebut);
    }
}
