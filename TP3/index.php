<?php
class Animal {
    protected $cri;
    protected $taille;
    protected $sexe;
    protected $habitat;
    protected $chaine_alimentaire;

    public function __construct($cri, $taille, $sexe, $habitat, $chaine_alimentaire) {
        $this->cri = $cri;
        $this->taille = $taille;
        $this->sexe = $sexe;
        $this->habitat = $habitat;
        $this->chaine_alimentaire = $chaine_alimentaire;
    }

    public function manger() {
        
    }

    public function crier() {
        
    }
}

class Mammifere extends Animal {
    protected $couleur_de_pelage;
    protected $nombre_de_pattes;

    public function __construct($cri, $taille, $sexe, $habitat, $chaine_alimentaire, $couleur_de_pelage, $nombre_de_pattes) {
        parent::__construct($cri, $taille, $sexe, $habitat, $chaine_alimentaire);
        $this->couleur_de_pelage = $couleur_de_pelage;
        $this->nombre_de_pattes = $nombre_de_pattes;
    }

    public function courir() {
        
    }

    public function marcher() {
        
    }
}

class Poisson extends Animal {
    protected $couleur_des_ecailles;
    protected $nageoire;

    public function __construct($cri, $taille, $sexe, $habitat, $chaine_alimentaire, $couleur_des_ecailles, $nageoire) {
        parent::__construct($cri, $taille, $sexe, $habitat, $chaine_alimentaire);
        $this->couleur_des_ecailles = $couleur_des_ecailles;
        $this->nageoire = $nageoire;
    }

    public function nager() {
    }
}

class Chat extends Mammifere {
    public function __construct($cri, $taille, $sexe, $habitat, $chaine_alimentaire, $couleur_de_pelage, $nombre_de_pattes) {
        parent::__construct($cri, $taille, $sexe, $habitat, $chaine_alimentaire, $couleur_de_pelage, $nombre_de_pattes);
    }

    public function mordre() {
    }
}

class Chien extends Mammifere {
    public function __construct($cri, $taille, $sexe, $habitat, $chaine_alimentaire, $couleur_de_pelage, $nombre_de_pattes) {
        parent::__construct($cri, $taille, $sexe, $habitat, $chaine_alimentaire, $couleur_de_pelage, $nombre_de_pattes);
    }

    public function mordre() {
    }
}

class PoissonRouge extends Poisson {
    public function __construct($cri, $taille, $sexe, $habitat, $chaine_alimentaire, $couleur_des_ecailles, $nageoire) {
        parent::__construct($cri, $taille, $sexe, $habitat, $chaine_alimentaire, $couleur_des_ecailles, $nageoire);
    }
}

class Requin extends Poisson {
    public function __construct($cri, $taille, $sexe, $habitat, $chaine_alimentaire, $couleur_des_ecailles, $nageoire) {
        parent::__construct($cri, $taille, $sexe, $habitat, $chaine_alimentaire, $couleur_des_ecailles, $nageoire);
    }

    public function chasser() {
    }
}

?>