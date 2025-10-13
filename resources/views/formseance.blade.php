<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($workout) ? 'Modifier' : 'Créer' }} une séance</title>
</head>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body class="bg-gris-fond text-black ">

<h1 class="text-5xl font-bold text-black p-6 h-[7vh]">{{ isset($workout) ? 'Modifier une séance' : 'Créer une séance' }}</h1>

<div class="bg-blanc text-black rounded-[1.8vw] p-5 w-[170vh] h-[85vh] flex justify-center mt-[5vh] m-auto">

</div>
</body>
</html>

