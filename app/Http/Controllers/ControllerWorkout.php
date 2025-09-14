<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerWorkout extends Controller
{
    public function index(){
        return view('workout');
    }
}
