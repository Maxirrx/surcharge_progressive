<?php

namespace App\Repositories;

use App\Models\exercices;

class ExerciceRepositorie
{

    public function getallexercicebyuser($user_id)
    {
        $exercices = exercices::where('user_id', $user_id)
            ->get();
        return $exercices;
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'muscle_id' => 'required',
            'user_id' => 'required',
            'public' => 'boolean',
        ]);
        $validated['public'] = $validated['public'] ?? false;

        $exercice = Exercice::create([
            'name' => $validated['name'],
            'muscle_id' => $validated['muscle_id'],
            'user_id' => $validated['user_id'],
            'public' => $validated['public'],
        ]);
        return response()->json($exercice, 201);
    }
}
