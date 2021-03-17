<?php

include('./src/Contact.php');

$nom_fichier = "src/repertoire.txt";
$contenu = file_get_contents($nom_fichier);

function getRepertoire() {
    global $contenu;
    return explode("\n", $contenu);
}

function ecrire($contact) {
    global $contenu, $nom_fichier;

    $nom = $contact->getNom();
    $telephone = $contact->getPrenom();

    if(!existe($nom) || !existe($telephone)) {
        $contenu .= $contact->toString();
        file_put_contents($nom_fichier, $contenu);
        return true;
    } else return false;
}

function getInformations($nom = null, $adresse = null, $prenom = null) {
    $repertoire = getRepertoire();

    for ($i = 0; $i < sizeof($repertoire); $i++) {
        $resultat = explode('█', $repertoire[$i]);
        if ($resultat[0] == $nom || $resultat[1] == $prenom || $resultat[3] == $adresse)
            return new Contact($resultat[0], $resultat[1], $resultat[2], $resultat[3]);
    }
}

function existe($donnee) {
    global $contenu;
    return stristr($contenu, $donnee);
}

?>