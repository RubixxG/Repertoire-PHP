<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Répertoire téléphonique</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <h1> Répertoire téléphonique </h1>
    <h2>Ajouter un numéro</h2>

    <?php
        include('./src/Recherche.php');

        if (isset($_POST)) {
            if (!empty($_POST['nom'])) {
                $recherche = new Recherche($_POST);
                $recherche->rechercher();

                /*if ($informations != null) {
                    echo '<p>Nom: ' . $nom . '</p>';
                    echo '<p>Prénom: ' . $prenom . '</p>';
                    echo '<p>Numéro de téléphone: ' . $telephone . '</p>';
                    echo '<p>Adresse: ' . $adresse . '</p>';
                } else echo '<p>Désolé, le nom ' . $nom . ' est inconnu</p>';*/
            }
        }
    ?>

    <a href="index.html"> Retour au menu principal </a>
</body>