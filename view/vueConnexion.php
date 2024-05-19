<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <form action="index.php?action=connexion" method="POST">
    <label for="login">Votre login : </label> <br>
    <input type="text" name="login"><br>
    <label for="mdp">Votre mot de passe : </label> <br>
    <input type="password" name="mdp"><br><br>
    <input type="submit" value="Se connecter">
    </form>
</body>
</html>