<?php

include('./src/Repertoire.php');

class Recherche {

    private $arguments;

    public function __construct($arguments) {
        $this->arguments = $arguments;
    }

    public function rechercher() {
        extract($this->arguments);
        if(!empty($adresse) && empty($nom) && empty($prenom)) {
            $resultats = $this->afficher_par_adresse($adresse);
            if(sizeof($resultats) > 0) {
                foreach($resultats as $key => $value)
                    $this->afficher($value);
            } else
                echo '<p>Aucun resultat trouvé.</p>';
        } else 
            $this->afficher_par($nom, $prenom);
    }

    private function afficher_par_adresse($adresse) {
        $repertoire = getRepertoire();
        $resultats = [];
        for($i = 0; $i < sizeof($repertoire); $i++) {
            $resultat = explode('█', $repertoire[$i]);
            array_push($resultats, new Contact($resultat[0], $resultat[1], $resultat[2], $resultat[3]));
        }
        return $resultats;
    }

    private function afficher_par($nom, $prenom) {
        $informations = getInformations($nom, null, $prenom);
        if($informations != null)
            $this->afficher($informations);
        else 
            echo '<p>Désolé, le nom ' . $nom . ' est inconnu</p>';
    }

    private function afficher($contact) {
        echo '<p>Nom: ' . $contact->getNom() . '</p>';
        echo '<p>Prénom: ' . $contact->getPrenom() . '</p>';
        echo '<p>Numéro de téléphone: ' . $contact->getTelephone() . '</p>';
        echo '<p>Adresse: ' . $contact->getAdresse() . '</p>';
    }

}

?>