@extends('index')

@section('title', 'Historique')

@section('nomdepage', 'Page Historique' )

@section('content')

    <div class="grid grid-rows-[16.6vh_16.6vh_16.6vh_16.6vh_16.6vh] grid-cols-6 gap-[1vh]">
        <div
            class="col-span-6 row-span-5 bg-blanc text-black rounded-[1.8vw] flex items-center justify-center p-5 text-xl font-medium ">
            liste de l'historique
            <table>
            </table>
        </div>
    </div>
@endsection
