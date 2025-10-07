<?php

namespace App\Repositories;

use App\Models\performance;

class PerformanceRepositorie{

    //totals des poids des ids session
    function totalpoidsxday($id_sessions){
        $totalpoids = Performance::whereIn('workout_id', $id_sessions)
            ->selectRaw('sum(poids * nb_repetition) as totalpoids')
            ->value('totalpoids');
        return $totalpoids;
    }
}
