<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Répertoire téléphonique</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <img id="logo" src="img/logo.png">
        <ul>
            <a class="titre"><li>Repertoire téléphonique</li></a>

            <a class="rechercher" href="recherche.html"><li>Recherche</li></a>

            <a class="ajouter" href="ajout.html"><li>Ajout</li></a>
        </ul>
    </header>

    <main id="ajout">
    <h1>
        <?php
                include('telephonie.php');

                if (isset($_POST)) {
                    if (!empty($_POST['nom']) && !empty($_POST['telephone'])) {
                        $nom = $_POST['nom'];
                        $telephone = $_POST['telephone'];
                        
                        if (!existe($nom) && !existe($telephone)) {
                            ajouter_telephone($nom, $telephone);
                            echo '<p>Le numéro de téléphone ' . $telephone . ' a été ajouté.</p>';
                        } else echo '<p>Le numéro ou le nom existe déjà.</p>';
                    }
                }
            ?>
    </h1>
    </main>

    <footer>
        <p id="footer">Projet créé par  : <br>
            Mateo, Lola, Jorian, Thomas
        </p>

        <a id="retour" href="index.html">Revenir à l'accueil</a>
    </footer>

        

    </body>
</html>