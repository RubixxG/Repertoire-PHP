<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Répertoire téléphonique</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
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

    <main id="ajout-fait">

        <div class="flex-div">
            <div class="resultat-div">
                <?php
                include('./src/Repertoire.php');

                if (isset($_POST)) {
                    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['telephone']) && !empty($_POST['adresse'])) {
                        extract($_POST);
                        $contact = new Contact($nom, $prenom, $telephone, $adresse);

                        if (ecrire($contact))
                            echo '<p class="ajoute">Le numéro de téléphone ' . $telephone . ' a été ajouté.</p>';
                        else
                            echo '<p class="not-found">Le numéro ou le nom existe déjà.</p>';
                    }
                }
                ?>
            </div>
        </div>

    </main>

    <footer id="home">
        <p id="footer-home">Projet créé par  : <br>
            Mateo, Lola, Jorian, Thomas
        </p>

        <a id="retour" href="index.html">Revenir à l'accueil</a>
    </footer>
</body>