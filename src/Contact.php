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

        public function setNom($nom) {
            $this->nom = $nom;
        }

        public function setPrenom($prenom) {
            $this->prenom = $prenom;
        }

        public function setTelephone($telephone) {
            $this->telephone = $telephone;
        }

        public function setAdresse($adresse) {
            $this->adresse = $adresse;
        }

        public function getDonnees() {
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
            
            foreach($donnees as $i => $value)  {
                if ($i < sizeof($donnees))
                    $resultat .= $value . "█";
            }
            $resultat .= "\n";
            return $resultat;
        }

    }

?>