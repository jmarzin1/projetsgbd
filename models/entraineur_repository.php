<?php 

include_once("models/database_connector.php");
include_once("models/entraineur.php");

class EntraineurRepository extends DatabaseConnector {
    const FIND_ALL = "SELECT * FROM ENTRAINEUR";
    const FIND_BY_CLUB_ID = "SELECT distinct CLUB.NOM_CLUB, ENTRAINEUR.*, ANIMATION.DATE_ENTREE_ENTRAINEUR
			     FROM CLUB, ANIMATION, ENTRAINEUR 
			     WHERE ANIMATION.NUMERO_CLUB = CLUB.NUMERO_CLUB
				 AND ENTRAINEUR.NUMERO_ENTRAINEUR = ANIMATION.NUMERO_ENTRAINEUR
				 AND CLUB.NUMERO_CLUB =";

    public function findByClubId($id) {
	$reponse = $this->db->query(self::FIND_BY_CLUB_ID . "'$id'");

	$entraineurs = array();
	while ($data = $reponse->fetch()) {
            $entraineur = new Entraineur();
            $entraineur->noentraineur = $data['NUMERO_ENTRAINEUR'];
            $entraineur->prenom = $data['PRENOM_ENTRAINEUR'];
            $entraineur->nom = $data['NOM_ENTRAINEUR'];
            $entraineur->nomclub = $data['NOM_CLUB'];
            array_push($entraineurs, $entraineur);
        }
        $reponse->closeCursor();
	
        return $entraineurs;
    }

    public function findAll() {
	$reponse = $this->db->query(self::FIND_ALL);

	$entraineurs = array();
	while ($data = $reponse->fetch()) {
            $entraineur = new Entraineur();
            $entraineur->noentraineur = $data['NUMERO_ENTRAINEUR'];
            $entraineur->prenom = $data['PRENOM_ENTRAINEUR'];
            $entraineur->nom = $data['NOM_ENTRAINEUR'];
            array_push($entraineurs, $entraineur);
        }
        $reponse->closeCursor();

        return $entraineurs;
    }
}

?>
