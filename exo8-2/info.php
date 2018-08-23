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
        <!-- recupération et affichage avec $_SESSION des infos du visiteur acvec confition 'if' pour la sécurité -->
        <?php if(!empty($_SESSION['prenom'])) { ?>
        <p>Je me souviens de vous ! Vous êtes <?php echo $_SESSION['prenom']; } ?>
        <?php ?><?php if(!empty($_SESSION['nom'])) { echo $_SESSION['nom']; ?> !</p>
        <p><?php } ?>Et vous avez <?php if(!empty($_SESSION['age'])) { echo $_SESSION['age']; }?> ans.</p>
    </body>
</html>