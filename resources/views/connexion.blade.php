<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>
</head>
<body class="bg-gris-clair">
<div class="bg-blanc ">
<form method="POST" action="/verif">
    @csrf
    <input type="text" placeholder="Nom d'utilisateur" name="login" required>
    <input type="password" placeholder="Mot de passe" name="password" required>
    <input type="submit" value="Connexion">
    @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif
</form>
</div>
</body>
</html>

