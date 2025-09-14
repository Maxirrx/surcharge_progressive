<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAffichage;
use App\Http\Controllers\Connexion;
use App\Http\Controllers\ControllerProfil;
use App\Http\Controllers\ControllerHistorique;
use App\Http\Controllers\ControllerWorkout;
use App\Http\Controllers\ControllerCommunaute;
use App\Http\Controllers\ControllerStatistique;
use App\Http\Controllers\ControllerParametre;



Route::get('/', function () {
    return view('connexion');
});

Route::post('/verif', [Connexion::class, 'connexion']);

Route::middleware(['auth'])->group(function () {
    Route::get('/menu', [ControllerAffichage::class, 'index']);



    Route::get('/profil', [ControllerProfil::class, 'index']);

    Route::get('/workout', [ControllerWorkout::class, 'index']);

    Route::get('/historique', [ControllerHistorique::class, 'index']);

    Route::get('/statistique', [ControllerStatistique::class, 'index']);

    Route::get('/communaute', [ControllerCommunaute::class, 'index']);

    Route::get('/parametre', [ControllerParametre::class, 'index']);
});
