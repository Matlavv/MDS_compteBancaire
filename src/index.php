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

// Exemple d'utilisation :
$compte1 = new CompteBancaire("John Doe", 1000);
$compte1->affiche();  // Affiche "Compte de John Doe: Solde = 1000"
$compte1->depot(500);
$compte1->affiche();  // Affiche "Compte de John Doe: Solde = 1500"
$compte1->retrait(200);
$compte1->affiche();  // Affiche "Compte de John Doe: Solde = 1300"
$compte1->retrait(2000);  // Affiche "Solde insuffisant."

?>