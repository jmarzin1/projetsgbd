<?php 

include_once("models/database_connector.php");
include_once("models/equipe.php");

class EquipeRepository extends DatabaseConnector {
    const FIND_ALL = "SELECT * FROM EQUIPE";

    public function findByNolicence(int $nolicence) {

    }

    public function findAll() {
	$reponse = $this->db->query(self::FIND_ALL);

	$equipes = array();
	while ($data = $reponse->fetch()) {
            $equipe = new Equipe();
            $equipe->noequipe = $data['NUMERO_EQUIPE'];
	    $equipe->nocategorie = $data['NUMERO_CATEGORIE'];
            array_push($equipes, $equipe);
        }
        $reponse->closeCursor();

        return $equipes;
    }
}

?>
