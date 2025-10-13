<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($exercice) ? 'Modifier' : 'Créer' }} un exercice</title>
</head>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body class="bg-gris-fond text-black ">

<h1 class="text-5xl font-bold text-black p-6 h-[7vh]">{{ isset($exercice) ? 'Modifier un exercice' : 'Créer un exercice' }}</h1>

<div class="bg-blanc text-black rounded-[1.8vw] p-5 w-[100vh] h-[70vh] flex justify-center mt-[10vh] m-auto">

    <form method="POST"
          action="{{ isset($exercice)
                        ? route('exercice.update', ['id' => $exercice->id])
                        : route('exercice.store') }}"
          class="flex flex-col justify-between w-full max-w-[70vh]">

        @csrf
        @if(isset($exercice))
            @method('PUT')
        @endif

        <div class="flex flex-col space-y-2">
            <label for="name" class="text-2xl font-semibold text-center">Nom de l'exercice</label>
            <input type="text"
                   id="name"
                   name="name"
                   value="{{ old('name', $exercice->name ?? '') }}"
                   placeholder="Nom de l'exercice"
                   class="border border-gris-clair rounded-lg p-3 text-xl focus:outline-none focus:ring-2 focus:ring-orange"
                   required>
        </div>

        <div class="flex flex-col space-y-2 mt-6">
            <label for="muscle_id" class="text-2xl font-semibold text-center">Muscle ciblé</label>
            <select id="muscle_id"
                    name="muscle_id"
                    class="border border-gris-clair rounded-lg p-3 text-xl focus:outline-none focus:ring-2 focus:ring-orange"
                    required>
                @foreach($muscles as $muscle)
                    <option value="{{ $muscle->id }}"
                        {{ (isset($exercice) && $exercice->muscle_id == $muscle->id) ? 'selected' : '' }}>
                        {{ $muscle->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-center mt-8">
            <input type="submit"
                   class="cursor-pointer dark:text-black text-blanc text-xl font-semibold p-3 px-8 rounded-[0.8vw] bg-orange hover:bg-[#ff8642] transition duration-200"
                   value="{{ isset($exercice) ? 'Mettre à jour' : 'Créer' }}">
        </div>

    </form>
</div>
</body>
</html>
