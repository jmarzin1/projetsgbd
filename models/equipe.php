<?php 

include("models/equipe_repository.php");

class Equipe {
    public $nomcategorie;
    public $noequipe;
    public $nomclub;
    
    public function toString() {
	echo "Equipe $this->noequipe de catégorie $this->nomcategorie<br>";
    }
    
    public function toStringClub(){
	echo "Equipe $this->noequipe de catégorie $this->nomcategorie du club $this->nomclub<br>";
    }
}

?>
