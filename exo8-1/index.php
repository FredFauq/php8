<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1</title>
        <link href="style.css" rel="stylesheet" />
    </head>
    <body>
        <div id="userAgent">
            <?php
            /* recupération et affichage de $_SERVER['HTTP_USER_AGENT'] pour avoir le user agent */
            echo 'User agent: ' . $_SERVER['HTTP_USER_AGENT'];
            ?>
        </div>
        <div id="ip">
            <?php
            /* recupération et affichage de $_SERVER['REMOTE_ADDR'] pour connaitre l'IP du visiteur */
            echo 'Adresse IP: ' . $_SERVER['REMOTE_ADDR'];
            ?>
        </div>
        <div id="serverName">
            <?php
            /* recupération et affichage de $_SERVER['SERVER_NAME'] donne le nom du serveur */
            echo 'Nom du serveur: ' . $_SERVER['SERVER_NAME'];
            ?>
        </div>
    </body>
</html>