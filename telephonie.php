<?php

$nom_fichier = 'repertoire.txt';
$contenu = file_get_contents($nom_fichier);

function ajouter_telephone($nom, $telephone) {
    global $nom_fichier, $contenu;

    $contenu .= $nom . "█" . $telephone . "\n";
    file_put_contents($nom_fichier, $contenu);
}


function get_numero($nom) {
    global $nom_fichier, $contenu;
    $repertoire = explode("\n", $contenu);

    for ($i = 0; $i < sizeof($repertoire); $i++) {
        $resultat = explode('█', $repertoire[$i]);
        if ($resultat[0] == $nom)
            return $resultat[1];
    }
}

function existe($contact) {
    global $nom_fichier, $contenu;
    return stristr($contenu, $contact);
}

?>