<?php

include_once("models/database_connector.php");
include_once("models/ajoutClub.php");

class AjoutJoueurRepository extends DatabaseConnector {
    const ADD = "INSERT INTO JOUEUR (ADRESSE_JOUEUR, NOM_JOUEUR, PRENOM_JOUEUR, DATE_NAISSANCE_JOUEUR  )  VALUES(:ADRESSE_JOUEUR, :NOM_JOUEUR, :PRENOM_JOUEUR, :DATE_NAISSANCE_JOUEUR)";
    const LINK = "INSERT INTO ENTREE (NUMERO_CLUB, NUMERO_LICENCE, DATE_ENTREE_JOUEUR)  VALUES(:NUMERO_CLUB, :NUMERO_LICENCE, :DATE_ENTREE_JOUEUR)";
    public $newjoueur;
    
    public function joueurAdd() {
	try{
	    $req = $this->db->prepare(self::ADD);
	    
	    $req->execute(array(
		':NOM_JOUEUR' => $this->newjoueur->nom,
		':PRENOM_JOUEUR' => $this->newjoueur->prenom,
		':DATE_NAISSANCE_JOUEUR' => $this->newjoueur->dob,
		':ADRESSE_JOUEUR' => $this->newjoueur->adresse,
	    ));
	    
	    $nolicence = $this->db->lastInsertId();
	    $req = $this->db->prepare(self::LINK);
	    $req->execute(array(
		':NUMERO_CLUB' => $this->newjoueur->noclub,
		':NUMERO_LICENCE' => $nolicence,
		':DATE_ENTREE_JOUEUR' => $this->newjoueur->date,
	    ));
	    
	    echo 'Le JOUEUR a bien été ajouté !';
	}
	catch (PDOException $e)
	{
	    die('Erreur : ' . $e->getMessage());
	}
    }

    public function joueurPrepare($noclub, $nom, $prenom, $date, $adresse, $dob) {
	$this->newjoueur = new AjoutJoueur();
	$this->newjoueur->noclub = $noclub;
	$this->newjoueur->nom = $nom;
	$this->newjoueur->prenom = $prenom;
	$this->newjoueur->date = implode("-", array_reverse(explode("/", $date)));
	$this->newjoueur->adresse = $adresse;
	$this->newjoueur->dob = implode("-", array_reverse(explode("/", $dob)));
    }
}

?>
