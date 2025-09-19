<?php

namespace App\Http\Controllers;

use App\Models\performance;
use App\Models\workout_session;
use App\Models\exercices;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FunctionControllerjson extends Controller
{
    public function top3(Request $request, )
    {
        $iduser = $request->input('iduser');
        $limite = $request->input('limite');

        $datedebut = Carbon::now()->subDays(30);
        $datefin = Carbon::now();

        $lessceancedes30dernier = workout_session::where('user_id', $iduser)
            ->whereBetween('dateofworkout', [$datedebut, $datefin])
            ->havingRaw('COUNT(*) >= 2')
            ->groupBy("workout_id")
            ->pluck("workout_id");

        $evolution = [];
        foreach ($lessceancedes30dernier as $sceance) {
            $sceancedebut = workout_session::where('workout_id', $sceance)
                ->orderBy('dateofworkout')
                ->pluck('id')

                ->first();
            $sceancefin = workout_session::where('workout_id', $sceance)
                ->orderBy('dateofworkout')
                ->pluck('id')
                ->skip($limite-1)
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

                if ($poidsDebut > 0) {
                    $pourcentage = (($poidsFin - $poidsDebut) / $poidsDebut) * 100;
                } else {

                    $pourcentage = $poidsFin > 0 ? 100 : 0;
                }
                $nomexo = exercices::where('id', $exerciceId)->pluck('name')->first();

                $evolution[$nomexo] = round($pourcentage, 2);
            }

        }

            return($evolution);
    }


    function graphique(Request $request){
        $iduser = $request->input('iduser');
        $limite = $request->input('limite');
        $idworkout = $request->input('idworkout');


        $sceanceIds = workout_session::where('workout_id', $idworkout)
            ->where('user_id', $iduser)
            ->orderBy('dateofworkout')
            ->limit($limite)
            ->pluck('id');

        $totalpoidsexodebut = performance::whereIn('workout_id', $sceanceIds)
            ->select('workout_id', 'exercices_id', performance::raw('SUM(poids * nb_repetition) as total_poids'))
            ->groupBy('workout_id', 'exercices_id')
            ->orderBy('workout_id')
            ->pluck('total_poids');


        return($totalpoidsexodebut);
    }
}
