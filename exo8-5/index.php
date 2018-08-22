<?php
// isset vérifie que les login et password existent. 
if(isset($_POST['login']) && isset($_POST['password'])){
// Définition des cookies
setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, '/', null, false, true); //crée le cookie pour le login
setcookie('password', $_POST['password'], time() + 365 * 24 * 3600,'/', null, false, true);} // créer le cookie pr le password
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5 Partie 8</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Exercice 5 Partie 8</h1>
        <p>Veuillez modifier votre identifiant et mot de passe, svp !</p>
      <!-- creéation du formulaire -->
    <form method="POST" action="index.php" enctype="multipart/form-data">
        <div><label>Votre login : <input type="text" name="login" id="login"></label></div>
        <div><label>Votre mot de passe : <input type="password" name="password" id="password"></label></div>
        <div><input type="submit" value="Valider"/></div>
    </form>
    </body>
</html>
