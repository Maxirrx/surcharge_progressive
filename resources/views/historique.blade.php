@extends('index')

@section('title', 'Historique')

@section('nomdepage', 'Page Historique' )

@section('content')

    @foreach($totalpoidsexodebut as $poids)
        <td>{{$poids}}</td>
    @endforeach
