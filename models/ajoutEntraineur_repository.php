<?php

include_once("models/database_connector.php");
include_once("models/ajoutClub.php");

class AjoutEntraineurRepository extends DatabaseConnector {
    const ADD = "INSERT INTO ENTRAINEUR (NOM_ENTRAINEUR, PRENOM_ENTRAINEUR)  VALUES(:NOM_ENTRAINEUR, :PRENOM_ENTRAINEUR)";
    const LINK = "INSERT INTO ANIMATION (NUMERO_CLUB, NUMERO_ENTRAINEUR, DATE_ENTREE_ENTRAINEUR)  VALUES(:NUMERO_CLUB, :NUMERO_ENTRAINEUR, :DATE_ENTREE_ENTRAINEUR)";
    public $newentraineur;
    
    public function entraineurAdd() {
	try{
	    $req = $this->db->prepare(self::ADD);
	    
	    $req->execute(array(
		':NOM_ENTRAINEUR' => $this->newentraineur->nom,
		':PRENOM_ENTRAINEUR' => $this->newentraineur->prenom,
	    ));
	    
	    $noentraineur = $this->db->lastInsertId();
	    $req = $this->db->prepare(self::LINK);
	    $req->execute(array(
		':NUMERO_CLUB' => $this->newentraineur->noclub,
		':NUMERO_ENTRAINEUR' => $noentraineur,
		':DATE_ENTREE_ENTRAINEUR' => $this->newentraineur->date,
	    ));
	    
	    echo "L' ENTRAINEUR a bien été ajouté !";
	}
	catch (PDOException $e)
	{
	    die('Erreur : ' . $e->getMessage());
	}
    }

    public function entraineurPrepare($noclub, $nom, $prenom, $date) {
	$this->newentraineur = new AjoutEntraineur();
	$this->newentraineur->noclub = $noclub;
	$this->newentraineur->nom = $nom;
	$this->newentraineur->prenom = $prenom;
	$this->newentraineur->date = implode("-", array_reverse(explode("/", $date)));
    }
}

?>
