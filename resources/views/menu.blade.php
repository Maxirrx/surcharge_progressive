@extends('index')

@section('title', 'Menu')

@section('nomdepage', 'Bienvenue dans le menu principal '. $user->login )

@section('content')
    <div class="grid grid-rows-[16.6vh_16.6vh_16.6vh_16.6vh_16.6vh] grid-cols-6 gap-[1vh]">
        <div
            class="col-span-4 row-span-1 bg-blanc text-black rounded-[1.8vw] flex items-center justify-center p-5 text-xl font-medium ">
            <div class="h-[75%] w-[90%] gap-[3px] text-xs flex justify-center items-center">
                <table class="border-separate border-spacing-[0.22vh]">
                    @php
                        $monthindex = isset($jourdelanneesemaine[1][1]) ? $jourdelanneesemaine[1][1]->month : 0;
                    @endphp
                    <thead>
                    @for($j = 0; $j<7 ;$j++)
                        <tr>
                            @for($i = 0; $i<count($jourdelanneesemaine);$i++)
                                @if(isset($jourdelanneesemaine[$i][$j]))
                                    @if($monthindex>=13 && $jourdelanneesemaine[$i][0]->month<12)
                                        @php
                                            $monthindex = isset($jourdelanneesemaine[$i][$j]) ? $jourdelanneesemaine[$i][$j]->month : 0;
                                        @endphp
                                    @endif
                                    @if($jourdelanneesemaine[$i][0]->month === $monthindex && $j===0)
                                        @php
                                            $monthindex++
                                        @endphp
                                        <th class="relative w-[1.4vh] h-[1.4vh] ">
                                              <span class="absolute whitespace-nowrap overflow-visible">
                                                {{$jourdelanneesemaine[$i][$j]->format('M')}}
                                              </span>

                                        </th>
                                    @else
                                        <th></th>

                                    @endif
                                @endif
                            @endfor
                        </tr>
                    @endfor
                    </thead>
                    <tbody>
                    @for($j = 0; $j<7 ;$j++)
                        <tr>
                            @for($i = 0; $i<count($jourdelanneesemaine);$i++)
                                @if(isset($jourdelanneesemaine[$i][$j]))

                                    @if($totalsceancedelannee->contains($jourdelanneesemaine[$i][$j]->format("Y-m-d")))
                                        <td class="rounded-[4px] w-[1.4vh] h-[1.4vh] bg-orange "></td>
                                    @else
                                        <td class="rounded-[4px] w-[1.4vh] h-[1.4vh] bg-gris-clair"></td>
                                    @endif

                                @endif
                            @endfor
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
        <div
            class="col-span-2 row-span-1 bg-blanc text-black rounded-[1.8vw] grid p-[1vh] pl-[2vh] text-xl font-medium">
            <p class="text-4xl">
            <div class="text-orange text-6xl font-normal"> Scéance {{$nextsceance}}</div>
            prochaine sceance
        </div>
        <div class="col-span-2 row-span-2 bg-blanc text-black rounded-[1.8vw] flex flex-col p-5 text-xl font-medium">
            @if(count($favori) === 0)
                <p class="text-3xl font-normal flex text-center">Vous n'avez pas de scéance en favori </p>
            @else
                <p
                    class="font-bold text-2xl p-[1vh]">Vos entraînements favoris </p>
            <div class="grid grid-cols-1 gap-[3vh] p-[2vh] ">@for($i = 0; $i < 4 ; $i++)
                    <div>{{$favori[$i]}}</div>
                @endfor</div>
            @endif
            @if(count($favori)> 4)
                <a href="/workout" class="underline">Voir plus</a>
            @endif
        </div>
        <div
            class="col-span-2 row-span-2 bg-blanc text-black rounded-[1.8vw] flex items-center justify-center p-5 text-xl font-medium">
            <p>@if($top3 === false)
                <p class="text-3xl font-normal flex text-center">Vous n'avez pas encore fait assez de scéance, il faut
                    s'entrainer 😉</p>
            @else
                <p class="font-bold text-2xl p-[1vh]">Vos meilleures perf </p>
                <div class="grid grid-cols-1 gap-[3vh] p-[2vh] ">@foreach($top3 as $top)
                        <div>{{$top}}</div>
                    @endforeach</div>
            @endif</div>
        <div
            class="col-span-2 row-span-1 bg-blanc text-black rounded-[1.8vw] grid p-[1vh] pl-[2vh] text-xl font-medium">
            <p class="text-4xl">
            <div class="text-bleu text-6xl font-normal"> {{ $totalpoids }} Kg</div>
            Total poids des 30 derniers jours
        </div>
        <div
            class="col-span-1 row-span-1 bg-blanc text-black rounded-[1.8vw] grid p-[1vh] pl-[2vh] text-xl font-medium">
            <p class="text-4xl">
            <div class="text-bleu text-6xl font-normal"> {{ $user->weight }} Kg</div>
            Poids actuel
        </div>
        <div
            class="col-span-1 row-span-1 bg-blanc text-black rounded-[1.8vw] grid p-[1vh] pl-[2vh] text-xl font-medium">
            <p class="text-4xl">
            <div class="text-orange text-6xl font-normal"> {{ $nbsceances }}</div>
            Nombre de séances dans le mois
        </div>
        <div
            class="col-span-4 row-span-2 bg-blanc text-black rounded-[1.8vw] flex items-center justify-center p-5 text-xl font-medium">
            <p>graphique</div>
        <div
            class="col-span-2 row-span-2 bg-blanc text-black rounded-[1.8vw] flex items-center justify-center p-5 text-xl font-medium">
            <p class="text-5xl font-normal p-[2vh]">Keep pushing {{$user->login}}! Tomorrow we’ll try to add more weight on your
                bench.</div>
    </div>
@endsection

