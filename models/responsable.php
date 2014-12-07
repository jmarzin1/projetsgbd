<?php 

include("models/responsable_repository.php");

class Responsable {
    public $noresponsable;
    public $noclub;
    public $prenom;
    public $nom;
    public $fonction;

    public function toString() {
	echo "Responsable $this->noresponsable du club $this->noclub: $this->nom $this->prenom en tant que $this->fonction<br>";
    }
}

?>
