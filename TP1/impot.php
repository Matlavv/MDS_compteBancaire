<?php

    const pauvre = 0.15;
    const riche = 0.20;
    class Impot{
        public $nom;
        public $revenus;

        public function __construct($nom, $revenus) {
            $this->nom = $nom;
            $this->revenus = $revenus;
        }
        public function calculerImpot() {
            if ($this->revenus <= 15000) {
                return $this->revenus * pauvre;
            }  else {
                $impot = 15000 * pauvre;
                $revenusRestants = $this->revenus - 15000; 
                $impot += $revenusRestants * riche;
              return $impot;
            }
        }
        public function afficherImpot() {
            $impot = $this->calculerImpot();
            echo "Nom: " . $this->nom . "<br>";
            echo "Revenus: " . $this->revenus . "€<br>";
            echo "Montant de l'impôt à payer: " . $impot . "€<br>";
        }
    }
?>