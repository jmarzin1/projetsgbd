<?php

include_once("models/database_connector.php");
include_once("models/club.php");

class ClubRepository extends DatabaseConnector {
    const FIND_ALL = "SELECT * FROM CLUB";

    public function findById(int $id) {

    }

    public function findAll() {
        $reponse = $this->db->query(self::FIND_ALL);

        $clubs = array();
        while ($data = $reponse->fetch()) {
            $club = new Club();
            $club->id = $data['NUMERO_CLUB'];
            $club->name = $data['NOM_CLUB'];
            $club->localisation = $data['LOCALISATION'];
            array_push($clubs, $club);
        }
        $reponse->closeCursor();

        return $clubs;
    }
}

?>
