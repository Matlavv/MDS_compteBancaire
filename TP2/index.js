class CompteBancaire {
    constructor(nom = 'Dupont', solde = 1000) {
        this.nom = nom;
        this.solde = solde;
    }

    depot(montant) {
        this.solde += montant;
    }

    retrait(montant) {
        if (montant <= this.solde) {
            this.solde -= montant;
        } else {
            console.log("Solde insuffisant.");
        }
    }

    affiche() {
        console.log(`Compte de ${this.nom}: Solde = ${this.solde}`);
    }
}

//* Compte 1
const compte1 = new CompteBancaire("Duchmol", 800);
compte1.affiche();
compte1.depot(350);
compte1.retrait(200);
compte1.affiche();

//* Compte 2
const compte2 = new CompteBancaire();
compte2.depot(25);
compte2.affiche();
