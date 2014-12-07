<?php 

include("models/joueur_repository.php");

class Joueur {
    public $nolicence;
    public $adresse;
    public $nom;
    public $prenom;
    public $dob;
    public $noequipe;

    public function toString() {
	echo "Joueur $this->nolicence de l'équipe $this->noequipe: $this->nom $this->prenom né le $this->dob habite $this->adresse<br>";
    }
}

?>
