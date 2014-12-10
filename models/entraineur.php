<?php 

include("models/entraineur_repository.php");

class Entraineur {
    public $noentraineur;
    public $nom;
    public $prenom;
    public $nomclub;
    
    public function toString() {
	echo "Entraineur $this->noentraineur: $this->nom $this->prenom<br>";
    }

    public function toStringClub() {
	echo "Entraineur $this->noentraineur: $this->nom $this->prenom du club $this->nomclub<br>";
    }
}
?>
