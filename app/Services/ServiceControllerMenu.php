<?php

namespace App\Services;
use Carbon\CarbonPeriod;

class ServiceControllerMenu{

    function orderdaybyweekbeetween($start, $end){
        $totaljourdelannee = CarbonPeriod::create($start, '1day',$end);
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
        return $jourdelanneesemaine;
    }
}
