<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gris-fond h-screen overflow-hidden">
<div class="text-5xl font-bold text-black p-6 h-[7vh]">@yield('nomdepage') </div>
<div class="h-screen p-[2vh]">
<div class="flex h-[87vh] gap-[1vh]">
    <div class="flex flex-col gap-8 bg-gris-clair text-black rounded-[1.8vw] pt-8 p-8 h-full w-[15vw] font-extrablack text-3xl" >
        <a href="/menu">Menu</a>
        <a href="/profil">Profil</a>
        <a href="/workout">Workout</a>
        <a href="/historique">History</a>
        <a href="/statistique">Statistics</a>
        <a href="/communaute">Community</a>
        <a href="/parametre">Setting</a>
    </div>
    <div class="w-[calc(100vw-15vw)]">
        @yield('content')
    </div>
</div>
</div>
</body>
</html>
