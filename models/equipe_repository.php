<?php 

include_once("models/database_connector.php");
include_once("models/equipe.php");

class EquipeRepository extends DatabaseConnector {
    const FIND_ALL = "SELECT * FROM EQUIPE";
    const FIND_BY_CLUB = "SELECT CLUB.NUMERO_CLUB, CLUB.NOM_CLUB, EQUIPE.* FROM CLUB, EQUIPE, ENTRAINEUR, ANIMATION, ENTRAINE
			  WHERE ENTRAINEUR.NUMERO_ENTRAINEUR = ANIMATION.NUMERO_ENTRAINEUR
			      AND ENTRAINE.NUMERO_EQUIPE = EQUIPE.NUMERO_EQUIPE
			      AND ENTRAINE.NUMERO_ENTRAINEUR = ENTRAINEUR.NUMERO_ENTRAINEUR
			      AND CLUB.NUMERO_CLUB = ANIMATION.NUMERO_CLUB
			      AND CLUB.NUMERO_CLUB =";

    public function findByClubId($id) {
	$reponse = $this->db->query(self::FIND_BY_CLUB . "'$id'");

	$equipes = array();
	while ($data = $reponse->fetch()) {
            $equipe = new Equipe();
            $equipe->noequipe = $data['NUMERO_EQUIPE'];
	    $equipe->nomcategorie = $data['NOM_CATEGORIE'];
	    $equipe->nomclub = $data['NOM_CLUB'];
            array_push($equipes, $equipe);
        }
        $reponse->closeCursor();
	
        return $equipes;
    }

    public function findAll() {
	$reponse = $this->db->query(self::FIND_ALL);

	$equipes = array();
	while ($data = $reponse->fetch()) {
            $equipe = new Equipe();
            $equipe->noequipe = $data['NUMERO_EQUIPE'];
	    $equipe->nomcategorie = $data['NOM_CATEGORIE'];
            array_push($equipes, $equipe);
        }
        $reponse->closeCursor();

        return $equipes;
    }
}

?>
