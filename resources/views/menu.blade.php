@extends('index')

@section('title', 'Menu')

@section('nomdepage', 'Bienvenue dans le menu principal '. $user->login )

@section('content')
    <div class="grid grid-rows-[16.6vh_16.6vh_16.6vh_16.6vh_16.6vh] grid-cols-6 gap-[1vh]">
        <div
            class="col-span-4 row-span-1 bg-blanc text-black rounded-[1.8vw] flex items-center justify-center p-5 text-xl font-medium ">
            <div
                class=" grid grid-flow-col grid-rows-7 h-[75%] w-[90%] gap-[3px]"> @foreach($totaljourdelannee as $jour)
                    <div class=" rounded-sm bg-orange h-[10px] w-[10px] col-span-1 row-span-1"></div>
                @endforeach</div>
        </div>
        <div
            class="col-span-2 row-span-1 bg-blanc text-black rounded-[1.8vw] flex items-center justify-center p-5 text-xl font-medium">
            <p>prochaine sceance</div>
        <div class="col-span-2 row-span-2 bg-blanc text-black rounded-[1.8vw] flex flex-col p-5 text-xl font-medium"><p
                class="font-bold text-2xl p-[1vh]">Vos entraînements favoris </p>
            <div class="grid grid-cols-1 gap-[3vh] p-[2vh] ">@foreach($favori as $favo)
                    <div>{{$favo}}</div>
                @endforeach</div>
        </div>
        <div
            class="col-span-2 row-span-2 bg-blanc text-black rounded-[1.8vw] flex items-center justify-center p-5 text-xl font-medium">
            <p>@if($top3 === false)
                <p class="text-3xl font-normal flex text-center">Vous n'avez pas encore fait assez de scéance, il faut
                    s'entrainer 😉</p>
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
            <p class="text-5xl font-normal p-[2vh]">Keep pushing Maxirrx! Tomorrow we’ll try to add more weight on your bench.</div>
    </div>
@endsection

