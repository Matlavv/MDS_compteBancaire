<?php
class CompteBancaire {
    private $nom;
    private $solde;

    public function __construct($nom = 'Dupont', $solde = 1000) {
        $this->nom = $nom;
        $this->solde = $solde;
    }

    public function depot($montant) {
        $this->solde += $montant;
    }

    public function retrait($montant) {
        if ($montant <= $this->solde) {
            $this->solde -= $montant;
        } else {
            echo "Solde insuffisant.";
        }
    }

    public function affiche() {
        echo "Compte de " . $this->nom . ": Solde = " . $this->solde . PHP_EOL;
    }
}

//* Compte 1
$compte1 = new CompteBancaire("Duchmol", 800);
$compte1->affiche();  
$compte1->depot(350);  
$compte1->retrait(200);
$compte1->affiche();  

//* Compte 2
$compte2 = new CompteBancaire();
$compte2->depot(25);
$compte2->affiche(); 

?>