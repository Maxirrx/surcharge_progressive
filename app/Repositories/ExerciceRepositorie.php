<?php

namespace App\Repositories;

use App\Models\exercices;
use App\Models\muscles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ExerciceRepositorie
{

    public function getallexercicebyuser($user_id)
    {
        $exercices = exercices::where('user_id', $user_id)
            ->orderBy('updated_at')
            ->get();
        return $exercices;
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'muscle_id' => 'required',
        ]);


        $user = Auth::user();

        exercices::create([
            'name' => $validated['name'],
            'muscle_id' => $validated['muscle_id'],
            'user_id' => $user->id,
            'public' => false,
        ]);
        return to_route('menu.workout');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'muscle_id' => 'required|integer',
        ]);

        $user = Auth::user();

        $exercice = exercices::findOrFail($id);
        $exercice->update([
            'name' => $validated['name'],
            'muscle_id' => $validated['muscle_id'],
            'user_id' => $user->id,
            'public' => false,
        ]);

        return to_route('menu.workout');
    }


}
