<?php

include("models/club_repository.php");

class Club {
    const ADD = "INSERT INTO CLUB (NOM_CLUB, LOCALISATION)  VALUES(:NOM_CLUB, :LOCALISATION)";

    private $id;
    private $name;
    private $localisation;

    public function save() {
        try {
            $req = $this->db->prepare(self::ADD);

            $req->execute(array(
                ':NOM_CLUB' => $this->name,
                ':LOCALISATION' => $this->localisation
            ));
            echo 'Le CLUB a bien été ajouté !';
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLocalisation($localisation) {
        $this->localisation = $localisation;
    }

    public function toString() {
        echo "club $this->id: $this->name de $this->localisation<br>";
    }
}

?>
