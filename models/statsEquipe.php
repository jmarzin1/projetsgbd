<?php

include("models/statsEquipe_repository.php");

class StatsEquipe {
    public $nbvictoire;
    public $nbdefaite;
    public $nbnul;
    public $moyennepoints;
    public $noequipe;    

    public function toString() {
        echo "Equipe $this->noequipe: $this->nbvictoire victoires<br>";
    }
}

?>
