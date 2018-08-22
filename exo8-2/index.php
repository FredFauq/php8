<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
// Déclaration des variables de session dans $_SESSION
$_SESSION['prenom'] = 'John';
$_SESSION['nom'] = 'Doe';
$_SESSION['age'] = 25;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 2 Partie 8</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Exercice 2  Partie 8</h1>
        <p>
            Bonjour <?php echo $_SESSION['prenom']; ?> !<br />
            Vous êtes à l'accueil de mon site. Voulez-vous aller sur une autre page ?
        </p>
        <p>
            <a href="info.php">Lien vers info.php</a>
        </p>
    </body>
</html>