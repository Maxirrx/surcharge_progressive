@extends('index')

@section('title', 'Menu')

@section('nomdepage',  __("dashboard.bienvenue") . ' '. $user->login )

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
            <p class="text-4xl ">
            <div class="text-orange text-6xl font-normal"> {{ __('dashboard.sceance') }} {{$nextsceance->name}}</div>
            {{ __('dashboard.prochaine') }}
        </div>
        <div class="col-span-2 row-span-2 bg-blanc text-black rounded-[1.8vw] flex flex-col p-5 text-xl font-medium">
            @if(count($favori) === 0)
                <p class="text-3xl font-normal flex text-center">Vous n'avez pas de scéance en favori </p>
            @else
                <p
                    class="font-bold text-2xl p-[1vh]">Vos entraînements favoris </p>
            <div class="grid grid-cols-1 gap-[3vh] p-[2vh] ">@foreach($favori as $fave)

                    <div>{{$fave}}</div>
                @endforeach</div>
            @endif
            @if(count($favori)> 4)
                <a href="/workout" class="underline">{{ __('dashboard.voir+') }}</a>
            @endif
        </div>
        <div
            class="col-span-2 row-span-2 bg-blanc text-black rounded-[1.8vw] p-5 text-xl font-medium relative">
            <div class="flex absolute right-5">
                <button onclick="func5graph()" class="bg-blanc p-2 rounded-[1.8vw] border border_black text-base font-light">5 dernières</button>
                <button onclick="func10graph()" class="bg-blanc p-2 rounded-[1.8vw] border border_black text-base font-light">10 dernières</button>
            </div>
            <p>@if($top3 === false)
                <p class="text-3xl font-normal flex text-center">Vous n'avez pas encore fait assez de scéance, il faut
                    s'entrainer 😉</p>
            @else

                <div class="grid grid-cols-1 gap-[2vh] pt-15 ">

                    @foreach($top3 as $key=>$top)
                        <div class="flex justify-between"><p class="text-xl text-orange">{{$key}} :</p> <p class="text-3xl text-bleu">+ {{$top}}%</p>  </div>
                    @endforeach</div>
                <p class="font-bold text-2xl p-[1vh] absolute bottom-5">Top 3 des exercices avec les plus gros gains</p>
            @endif</div>
        <div
            class="col-span-2 row-span-1 bg-blanc text-black rounded-[1.8vw] grid p-[1vh] pl-[2vh] text-xl font-medium">
            <p class="text-4xl">
            <div class="text-bleu text-6xl font-normal"> {{ $totalpoids }} Kg</div>
            {{ __('dashboard.total') }}
        </div>
        <div
            class="col-span-1 row-span-1 bg-blanc text-black rounded-[1.8vw] grid p-[1vh] pl-[2vh] text-xl font-medium">
            <p class="text-4xl">
            <div class="text-bleu text-6xl font-normal"> {{ $user->weight }} Kg</div>
            {{ __('dashboard.poids') }}
        </div>
        <div
            class="col-span-1 row-span-1 bg-blanc text-black rounded-[1.8vw] grid p-[1vh] pl-[2vh] text-xl font-medium">
            <p class="text-4xl">
            <div class="text-orange text-6xl font-normal"> {{ $nbsceances }}</div>
            {{ __('dashboard.nombre') }}
        </div>
        <div
            class="col-span-4 row-span-2 bg-blanc text-black rounded-[1.8vw]  text-xl font-medium">
            <div class="relative">
            <div class="pt-5 absolute right-5">
                <button onclick="func5graph()" class="bg-blanc p-2 rounded-[1.8vw] border border_black text-base font-light">5 dernières</button>
                <button onclick="func10graph()" class="bg-blanc p-2 rounded-[1.8vw] border border_black text-base font-light">10 dernières</button>
            </div>
            </div>
            @if($graphique == false)
                <p class="text-3xl font-normal flex text-center">Vous n'avez pas encore fait assez de scéance, il faut
                    s'entrainer 😉</p>
            @else
                <div class="w-full h-[75%]  flex items-center justify-center pt-20 ">
                    <canvas id="graph" class="w-full h-full"></canvas>
                </div>
                <p class="font-bold text-2xl p-[1vh] pl-10 pt-5">Historique des scéance {{$nextsceance->name}}</p>

            @endif


            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



            </div>
        <div
            class="col-span-2 row-span-2 bg-blanc text-black rounded-[1.8vw] flex items-center justify-center p-5 text-xl font-medium">
            <p class="text-5xl font-normal p-[2vh]">{{$randomphrase}}</div>
    </div>
    <script>
        const ctx = document.getElementById('graph');

        datavar = {{$graphique}}
        datalabel = []
        graphobj = null
        if (graphobj == null) {
            showgraph()
        }


        function showgraph(){
            if (datavar.length == 5) {
                datalabel = ["scéance 1", "scéance 2", "scéance 3", "scéance 4", "scéance 5"]
            } else {
                datalabel = ["scéance 1", "scéance 2", "scéance 3", "scéance 4", "scéance 5", "scéance 6", "scéance 7", "scéance 8", "scéance 9", "scéance 10",]
            }


            graphobj = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: datalabel,
                    datasets: [{
                        label: 'Poids total par scéance',
                        data: datavar,
                        borderColor: '#F76B15',
                        backgroundColor: '#F76B15',
                        borderWidth: 1,
                        tension: 0.4
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            grid: { display: false },
                            ticks: { display: false },
                            display: false,
                            drawBorder: false
                        },
                        y: {
                            grid: { display: false },
                            ticks: { display: false },
                            display: false,
                            drawBorder: false
                        }
                    },
                    plugins: {
                        legend: { display: false },
                        title: { display: false }
                    }
                }
            });

        }

        function func5graph(){
            const request = new Request("/graphique", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                },
                body: new URLSearchParams({ iduser: {{$user->id}}, limite: 5, idworkout: {{$nextsceance->id}}
                }),
            })


            fetch(request)
                .then(response => {
                    if (!response.ok) {
                        throw new Error("Erreur serveur");
                    }
                    return response.json();
                })
                .then(data => {
                    datavar = data;
                    if (graphobj !== null) {
                        graphobj.destroy();
                    }
                    showgraph()
                })
                .catch(error => {
                    console.error("Erreur fetch :", error);
                });

        }

        function func10graph(){
            const request = new Request("/graphique", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                },
                body: new URLSearchParams({ iduser: {{$user->id}}, limite: 10, idworkout: {{$nextsceance->id}}
                }),
            })


            fetch(request)
                .then(response => {
                    if (!response.ok) {
                        throw new Error("Erreur serveur");
                    }
                    return response.json();
                })
                .then(data => {
                    datavar = data;
                    if (graphobj !== null) {
                        graphobj.destroy();
                    }
                    showgraph()
                })
                .catch(error => {
                    console.error("Erreur fetch :", error);
                });

        }
    </script>

@endsection

