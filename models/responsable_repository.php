<?php

include_once("models/database_connector.php");
include_once("models/responsable.php");

class ResponsableRepository extends DatabaseConnector {
    const FIND_ALL = "SELECT * FROM RESPONSABLE";
    const FIND_BY_NOCLUB = "SELECT * FROM RESPONSABLE WHERE NUMERO_CLUB=";

    public function findByNoClub($noclub) {
        $reponse = $this->db->query(self::FIND_BY_NOCLUB . "'$noclub'");

        $responsables = array();
        while ($data = $reponse->fetch()) {
            $responsable = new Responsable();
            $responsable->noresponsable = $data['NUMERO_RESPONSABLE'];
            $responsable->prenom = $data['PRENOM_RESPONSABLE'];
            $responsable->nom = $data['NOM_RESPONSABLE'];
            $responsable->fonction = $data['FONCTION'];
            $responsable->noclub = $data['NUMERO_CLUB'];
            array_push($responsables, $responsable);
        }
        $reponse->closeCursor();

        return $responsables;
    }

    public function findAll() {
        $reponse = $this->db->query(self::FIND_ALL);

        $responsables = array();
        while ($data = $reponse->fetch()) {
            $responsable = new Responsable();
            $responsable->noresponsable = $data['NUMERO_RESPONSABLE'];
            $responsable->prenom = $data['PRENOM_RESPONSABLE'];
            $responsable->nom = $data['NOM_RESPONSABLE'];
            $responsable->fonction = $data['FONCTION'];
            $responsable->noclub = $data['NUMERO_CLUB'];
            array_push($responsables, $responsable);
        }
        $reponse->closeCursor();

        return $responsables;
    }
}

?>
