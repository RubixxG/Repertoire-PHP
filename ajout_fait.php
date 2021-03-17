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
        include('./src/Repertoire.php');
        include('./src/Contact.php');

        if (isset($_POST)) {
            if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['telephone']) && !empty($_POST['adresse'])) {
                extract($_POST);
                $repertoire = new Repertoire();
                $contact = new Contact($nom, $prenom, $telephone, $adresse);
                
                if ($repertoire->ecrire($contact))
                    echo '<p>Le numéro de téléphone ' . $telephone . ' a été ajouté.</p>';
                else 
                    echo '<p>Le numéro ou le nom existe déjà.</p>';
            }
        }
    ?>

    <a href="index.html"> Retour au menu principal </a>
</body>