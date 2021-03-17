<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Répertoire téléphonique</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <header class="res-recherche-header">
        <img id="logo" src="img/logo.png">
        <ul>
            <a class="titre">
                <li>Repertoire téléphonique</li>
            </a>

            <a class="rechercher" href="recherche.html">
                <li>Recherche</li>
            </a>

            <a class="ajouter" href="ajout.html">
                <li>Ajout</li>
            </a>
        </ul>
    </header>

    <main id="res-recherche">

        <div class="flex-resultat">
            <div class="resultat-div">

                <?php
                include('./src/Recherche.php');

                if (isset($_POST)) {
                    $recherche = new Recherche($_POST);
                    $recherche->rechercher();
                }
                ?>

                <a href="/recherche.html">Nouvelle recherche</a>
            </div>
        </div>

    </main>

    <footer>
        <p id="footer">Projet créé par : <br>
            Mateo, Lola, Jorian, Thomas
        </p>

        <a id="retour" href="index.html">Revenir à l'accueil</a>
    </footer>
</body> 