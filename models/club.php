<?php

include("models/club_repository.php");

class Club {
    public $id;
    public $name;
    public $localisation;

    public function toString() {
        echo "club $this->id: $this->name de $this->localisation<br>";
    }
}

?>
