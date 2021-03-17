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

        <a class="rechercher" href="#"><li>Recherche</li></a>

        <a class="ajouter" href="ajout.html"><li>Ajout</li></a>
    </ul>
</header>

<main id="recherche">

    <h1>
    Résultat :
    <br>
    <?php
        include('telephonie.php');

        if (isset($_POST)) {
            if (!empty($_POST['nom'])) {
                $nom = $_POST['nom'];
                $telephone = get_numero($nom);

                if ($telephone != null) {
                    echo '<p>Nom: ' . $nom . '</p>';
                    echo '<p>Numéro de téléphone: ' . $telephone . '</p>';
                } else echo '<p>Désolé, le nom ' . $nom . ' est inconnu</p>';
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