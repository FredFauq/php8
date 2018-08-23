<?php
// !empty vérifie que les login et password existent et ne sont pas vide. 
if (!empty($_POST['login']) && !empty($_POST['password'])) {
    // Création du cookie, syntaxe IMPORTANTE pour la sécurité !
    setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, '/', null, false, true);
}
// !empty vérifie que les login et password existent et ne sont pas vide.
if (!empty($_POST['password'])) {   
    // Création du cookie, syntaxe IMPORTANTE pour la sécurité !
    setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, '/', null, false, true);
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3 Partie 8</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Exercice 3 Partie 8</h1>
        <p>Veuillez remplir le formulaire, svp, merci !</p>
        <!-- Création du formulaire -->
        <form class="form" method="post" action="index.php" enctype="multipart/form-data">
            <!-- Ajout des inputs avec leurs labels dans des <div> -->
            <div><label for="login">Identifiant :</label><input type="text" name="login" id= "login"></div>
            <div><label for="password">Mot de passe :</label><input type="text" name="password" id="password"></div>
            <!-- Bouton Submit de validation du formulaire pour l'envoi des données -->
            <div><button type="submit" name="validate" action="index.php">Valider</button></div>
        </form>
    </body>
</html>
