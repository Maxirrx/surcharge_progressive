<?php

use App\Http\Controllers\ControllerForm;
use App\Repositories\ExerciceRepositorie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerMenu;
use App\Http\Controllers\Connexion;
use App\Http\Controllers\ControllerProfil;
use App\Http\Controllers\ControllerHistorique;
use App\Http\Controllers\ControllerWorkout;
use App\Http\Controllers\ControllerCommunaute;
use App\Http\Controllers\ControllerStatistique;
use App\Http\Controllers\ControllerParametre;
use \App\Http\Controllers\FunctionControllerjson;


Route::get('/', function () {return view('connexion');})->name('login');

Route::post('/verif', [Connexion::class, 'connexion']);

Route::middleware(['auth'])->group(function () {
    Route::prefix('menu')->group(function () {
        Route::get('/', [ControllerMenu::class, 'index'])->name('menu.index');
        Route::get('/profil', [ControllerProfil::class, 'index'])->name('menu.profil');
        Route::get('/workout', [ControllerWorkout::class, 'index'])->name('menu.workout');
        Route::get('/historique', [ControllerHistorique::class, 'index'])->name('menu.historique');
        Route::get('/statistique', [ControllerStatistique::class, 'index'])->name('menu.statistique');
        Route::get('/communaute', [ControllerCommunaute::class, 'index'])->name('menu.communaute');
        Route::get('/parametre', [ControllerParametre::class, 'index'])->name('menu.parametre');
    });

    Route::prefix('exercice')->group(function () {
        Route::get('/create', [ControllerForm::class, 'create_exercice'])->name('exercice.create');
        Route::get('/edit/{exercice}', [ControllerForm::class, 'edit_exercice'])->name('exercice.edit');
        Route::post('/store', [ExerciceRepositorie::class, 'store'])->name('exercice.store');
        Route::put('/update/{id}', [ExerciceRepositorie::class, 'update'])->name('exercice.update');

    });

    Route::prefix('seance')->group(function () {
        Route::get('/create', [ControllerForm::class, 'create_seance'])->name('seance.create');
        Route::get('/edit/{seance}', [ControllerForm::class, 'edit_seance'])->name('seance.edit');
        Route::post('/store', [ExerciceRepositorie::class, 'store'])->name('seance.store');
        Route::put('/update/{id}', [ExerciceRepositorie::class, 'update'])->name('seance.update');

    });

    Route::post("/top3", [FunctionControllerjson::class, 'top3json']);
    Route::post("/graphique", [FunctionControllerjson::class, 'graphiquejson']);
});
