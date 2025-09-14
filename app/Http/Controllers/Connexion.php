<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Connexion extends Controller
{
    public function connexion(Request $request)
    {
        $credentials = $request->only('login', 'password');
        $user = User::where('login', $credentials['login'])->first();
        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            return redirect('/menu');
        }
        return redirect('/')
            ->with('error', 'Identifiants invalides.');
    }
}
