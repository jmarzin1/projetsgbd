<?php

include_once("models/database_connector.php");
include_once("models/ajoutClub.php");

class AjoutClubRepository extends DatabaseConnector {
    const ADD = "INSERT INTO CLUB (NOM_CLUB, LOCALISATION)  VALUES(:NOM_CLUB, :LOCALISATION)";
    public $newclub;
    
    public function clubAdd() {
	try{
	    $req = $this->db->prepare(self::ADD);
	    
	    $req->execute(array(
		':NOM_CLUB' => $this->newclub->nom,
		':LOCALISATION' => $this->newclub->localisation
	    ));
	    echo 'Le CLUB a bien été ajouté !';
	}
	catch (PDOException $e)
	{
	    die('Erreur : ' . $e->getMessage());
	}
    }

    public function clubPrepare($place, $nom) {
	$this->newclub = new AjoutClub();
	$this->newclub->localisation = $place;
	$this->newclub->nom = $nom;
    }
}

?>
