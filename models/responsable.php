<?php

include("models/responsable_repository.php");

class Responsable {
    private $noresponsable;
    private $noclub;
    private $prenom;
    private $nom;
    private $fonction;

    public function toString() {
        echo "Responsable $this->noresponsable du club $this->noclub: $this->nom $this->prenom en tant que $this->fonction<br>";
    }
}

?>
