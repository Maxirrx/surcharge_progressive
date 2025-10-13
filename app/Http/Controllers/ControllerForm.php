<?php

namespace App\Http\Controllers;

use App\Models\exercices;
use App\Models\muscles;
use App\Models\workout_template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerForm extends Controller
{
    public function create_exercice(){
        $muscles = muscles::all();

        return view('formexercice', ['muscles' => $muscles]);
    }

    public function edit_exercice($id){
        $exercice = exercices::findOrFail($id);
        $muscles = muscles::all();

        return view('formexercice', ['muscles' => $muscles, 'exercice' => $exercice]);
    }

    public function create_seance(){
        $user = Auth::user();
        $exercices = exercices::all()->where('id', $user->id);

        return view('formseance', ['exercices' => $exercices]);
    }

    public function edit_seance($id){
        $workout = workout_template::findOrFail($id);
        $user = Auth::user();
        $exercices = exercices::all()->where('id', $user->id);

        return view('formseance', ['workout' => $workout, 'exercices' => $exercices]);
    }
}
