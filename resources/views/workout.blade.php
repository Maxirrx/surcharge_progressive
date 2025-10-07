@extends('index')

@section('title', 'Workout')

@section('nomdepage', 'Page Workout' )

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
                                        <td class="relative rounded-[4px] w-[1.4vh] h-[1.4vh] bg-bleu group">
                                            <span class="absolute left-5 top-0 opacity-0 group-hover:opacity-100 transition duration-300 bg-gray-700 text-white text-xs p-1 rounded z-50">
                                                {{$jourdelanneesemaine[$i][$j]->translatedFormat('j M')}}
                                            </span>
                                        </td>
                                    @else
                                        <td class="rounded-[4px] w-[1.4vh] h-[1.4vh] bg-gris-clair">

                                        </td>

                                    @endif

                                @endif
                            @endfor
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-span-2 row-span-1 bg-blanc text-black rounded-[1.8vw] grid p-[1vh] pl-[2vh] text-xl font-medium">
            planifié une séance
            <input type="submit" value="Planifier" class="dark:text-black text-blanc p-3 rounded-[1.8vw] bg-orange">

        </div>

        <div class="col-span-3 row-span-4 bg-blanc text-black rounded-[1.8vw] flex flex-col  text-xl font-medium">
            <table class="w-full border-collapse">
                <tr class="border-b">
                    <th class="p-4 text-left">Nom de la séance</th>
                    <th class="p-4 text-left">Nombre d'exercices</th>
                    <th><input type="submit" value="Créer un nouvelle séance" class="dark:text-black text-blanc p-2 text-base rounded-[0.5vw] bg-vert"></th>
                </tr>
                @for($i = 0; $i < 6 ; $i++)
                    @if(isset($tableauworkout[$i]))
                    <tr>
                        <td class="border-b p-4 font-bold text-2xl">{{$tableauworkout[$i]["name"]}}</td>
                        <td class="border-b p-4">{{$tableauworkout[$i]["nb"]}}</td>
                        <td class="border-b p-4">
                            <input type="submit" value="Modifier" class="dark:text-black text-blanc p-3 rounded-[0.5vw] bg-bleu">
                        </td>
                        <td class="border-b p-4">
                            <input type="submit" value="Lancer" class="dark:text-black text-blanc p-3 rounded-[0.5vw] bg-orange">
                        </td>
                    </tr>
                    @endif
                @endfor
            </table>
        </div>
        <div class="col-span-3 row-span-4 bg-blanc text-black rounded-[1.8vw]  text-xl font-medium relative">
            <table class="w-full border-collapse">
                <tr class="border-b">
                    <th class="p-4 text-left">Nom de l'exercice</th>
                    <th><input type="submit" value="Créer un nouvel exercice" class="dark:text-black text-blanc p-2 text-base rounded-[0.5vw] bg-vert"></th>

                </tr>
                @for($i = 0; $i < 8 ; $i++)
                    @if(isset($tableauexercice[$i]))
                    <tr>
                        <td class="border-b p-3 font-bold text-xl">{{$tableauexercice[$i]->name}}</td>
                        <td class="border-b p-3">
                            <input type="submit" value="Modifier" class="dark:text-black text-blanc p-2 rounded-[0.5vw] bg-bleu">
                        </td>
                    </tr>
                    @endif
                @endfor
            </table>
        </div>


@endsection

