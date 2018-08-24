<?php
// vérifie que le login existe et n'est pas vide. 
if(!empty($_POST['login'])) {
// Définition du cookie
setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, '/', null, false, true); //crée le cookie pour le login
}
// vérifie que le password existe et n'est pas vide. 
if(!empty($_POST['password'])) {
// Définition du cookie
 setcookie('password', $_POST['password'], time() + 365 * 24 * 3600,'/', null, false, true); // créer le cookie pr le password
}
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
      <!-- création du formulaire -->
    <form method="POST" action="index.php" enctype="multipart/form-data">
        <div><label>Votre login : <input type="text" name="login" id="login"></label></div>
        <div><label>Votre mot de passe : <input type="password" name="password" id="password"></label></div>
        <div><input type="submit" value="Valider"/></div>
        <p>
        <?php
        echo 'Votre login est : ' . $_COOKIE['login']
        ?>
        </p>
        <p>
        <?php
        echo 'Votre password est : ' . $_COOKIE['password']       
        ?>
        </p>
    </form>
    </body>
</html>
