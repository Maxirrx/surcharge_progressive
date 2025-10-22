<?php

use App\Http\Controllers\ControllerApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [ControllerApi::class, 'login']);
//Route::get('/getacceuil', ControllerApi::class, 'acceuil');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

});

