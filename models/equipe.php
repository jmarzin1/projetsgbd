<?php 

include("models/equipe_repository.php");

class Equipe {
    public $nocategorie;
    public $noequipe;

    public function toString() {
	echo "Equipe $this->noequipe de catégorie $this->nocategorie<br>";
    }
}

?>
