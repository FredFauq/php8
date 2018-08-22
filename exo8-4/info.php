<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4 Partie 8</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Exercice 4 Partie 8</h1>
        <!-- Ouverture des balises PHP dans une balise <p> -->
        <p>
            <?php
            // Vérification que les cookies existent.
            if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
                // Affichage des cookies.
                echo 'votre login est : ' . $_COOKIE['login'] . ', et votre mot de passe est : ' . $_COOKIE['password'];
            }
            ?>
        </p>
    </body>
</html>
