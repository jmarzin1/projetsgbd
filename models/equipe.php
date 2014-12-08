<?php 

include("models/equipe_repository.php");

class Equipe {
    public $nocategorie;
    public $noequipe;
    public $nomclub;
    
    public function toString() {
	echo "Equipe $this->noequipe de catégorie $this->nocategorie<br>";
    }
    
    public function toStringClub(){
	echo "Equipe $this->noequipe de catégorie $this->nocategorie du club $this->nomclub<br>";
    }
}

?>
