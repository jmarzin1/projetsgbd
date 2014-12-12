<?php

require_once("database_connector.php");

class Club extends DatabaseConnector {
    const ADD = "INSERT INTO CLUB (NOM_CLUB, LOCALISATION)  VALUES(:NOM_CLUB, :LOCALISATION)";

    private $id;
    private $nom;
    private $localisation;

    public function save() {
        try {
            $req = $this->db->prepare(self::ADD);

            $req->execute(array(
                ':NOM_CLUB' => $this->nom,
                ':LOCALISATION' => $this->localisation
            ));
            echo 'Le CLUB a bien été ajouté !';
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getLocalisation() {
        return $this->localisation;
    }

    public function setLocalisation($localisation) {
        $this->localisation = $localisation;
    }

    public function toString() {
        echo "club $this->id: $this->name de $this->localisation<br>";
    }
}

?>
