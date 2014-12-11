<?php

include_once("models/entraineur_repository.php");

class Entraineur extends DatabaseConnector {
    const ADD = "INSERT INTO ENTRAINEUR (NOM_ENTRAINEUR, PRENOM_ENTRAINEUR)  VALUES(:NOM_ENTRAINEUR, :PRENOM_ENTRAINEUR)";
    const LINK = "INSERT INTO ANIMATION (NUMERO_CLUB, NUMERO_ENTRAINEUR, DATE_ENTREE_ENTRAINEUR)  VALUES(:NUMERO_CLUB, :NUMERO_ENTRAINEUR, :DATE_ENTREE_ENTRAINEUR)";

    private $nom;
    private $prenom;
    private $nomclub;
    private $noclub;

    private $date;

    public function save() {
        try {
            $req = $this->db->prepare(self::ADD);

            $req->execute(array(
                ':NOM_ENTRAINEUR' => $this->nom,
                ':PRENOM_ENTRAINEUR' => $this->prenom,
            ));

            $noentraineur = $this->db->lastInsertId();
            $req = $this->db->prepare(self::LINK);
            $req->execute(array(
                ':NUMERO_CLUB' => $this->noclub,
                ':NUMERO_ENTRAINEUR' => $noentraineur,
                ':DATE_ENTREE_ENTRAINEUR' => $this->date,
            ));

            echo "L'ENTRAINEUR a bien été ajouté !";
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setNomclub($nomclub) {
        $this->nomclub = $nomclub;
    }

    public function setNoclub($noclub) {
        $this->noclub = $noclub;
    }

    public function setDate($date) {
        $this->date = implode("-", array_reverse(explode("/", $date)));
    }

    public function toString() {
        echo "Entraineur $this->noentraineur: $this->nom $this->prenom<br>";
    }

    public function toStringClub() {
        echo "Entraineur $this->noentraineur: $this->nom $this->prenom du club $this->nomclub<br>";
    }
}
?>
