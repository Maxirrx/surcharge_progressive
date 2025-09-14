<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProfil extends Controller
{
    public function index(){
        return view('profil');
    }
}
