<?php 

include("models/classement_repository.php");

class Classement {
    public $noequipe;
    public $nbvictoires;
    public $nbnuls;
    public $nbdefaites;
    public $points;
    public $diff;

    public function toString() {
	echo "Equipe $this->noequipe: $this->points Points - $this->nbvictoires Victoires - $this->nbnuls Nuls - $this->nbdefaites Défaites - Différence : $this->diff<br>";
    }

}

?>
