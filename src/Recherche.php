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
                echo '<h1>Voici les resultats ('. sizeof($resultats) . ')</h1>';
                foreach($resultats as $key => $value)
                    $this->afficher($value);
            } else
                echo '<p class="not-found">Aucun resultat trouvé.</p>';
        } else {
            echo '<h1>Voici les resultats pour ' . $nom . '</h1>';
            $this->afficher_par($nom, $prenom);
        }
    }

    private function afficher_par_adresse($adresse) {
        $repertoire = getRepertoire();
        $resultats = [];

        for($i = 0; $i < sizeof($repertoire)-1; $i++) {
            $resultat = explode('█', $repertoire[$i]);
            if($resultat[3] == $adresse)
                array_push($resultats, new Contact($resultat[0], $resultat[1], $resultat[2], $resultat[3]));
        }
        return $resultats;
    }

    private function afficher_par($nom, $prenom) {
        $informations = getInformations($nom, null, $prenom);
        if($informations != null)
            $this->afficher($informations);
        else 
            echo '<p class="not-found">Désolé, le nom ' . $nom . ' est inconnu</p>';
    }

    private function afficher($contact) {
        echo '<p>Nom: ' . $contact->getNom() . '</p>';
        echo '<p>Prénom: ' . $contact->getPrenom() . '</p>';
        echo '<p>Numéro de téléphone: ' . $contact->getTelephone() . '</p>';
        echo '<p>Adresse: ' . $contact->getAdresse() . '</p>';
    }

}

?>