<?php

    class Contact {

        private $nom, $prenom, $telephone, $adresse;

        public function __construct($nom, $prenom, $telephone, $adresse) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->telephone = $telephone;
            $this->adresse = $adresse;
        }

        public function getNom() {
            return $this->nom;
        }

        public function getPrenom() {
            return $this->prenom;
        }

        public function getTelephone() {
            return $this->telephone;
        }

        public function getAdresse() {
            return $this->adresse;
        }

        private function getDonnees() {
            return [
                "nom" => $this->nom,
                "prenom" => $this->prenom,
                "telephone" => $this->telephone,
                "adresse" => $this->adresse
            ];
        }

        public function toString() {
            $resultat = "";
            $donnees = $this->getDonnees();
            
            foreach($donnees as $i => $value)
                $resultat .= $value . "█";
            $resultat .= "\n";
            return $resultat;
        }

    }

?>