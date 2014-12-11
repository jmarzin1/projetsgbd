<?php

include("models/rencontre_repository.php");

class Rencontre {
    private $norencontre;
    private $nojournee;
    private $date;
    private $scoredomicile;
    private $scoreexterieur;
    private $equipedomicile;
    private $equipeexterieur;

    public function toString() {
        echo "Rencontre $this->norencontre journée $this->nojournee date: $this->date [équipe $this->equipedomicile] $this->scoredomicile - $this->scoreexterieur [équipe $this->equipeexterieur]<br>";
    }
}

?>
