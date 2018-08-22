<?php
session_start(); // On démarre la session AVANT tout code HTML
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 2 Partie 8</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 2  Partie 8</h1>
        <p>Re-bonjour !</p>
        <!-- recupération et affichage avec $_SESSION des infos du visiteur -->
        <p>
           Je me souviens de vous ! Vous êtes <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br />
            Et vous avez <?php echo $_SESSION['age']; ?> ans.
        </p>
    </body>
</html>