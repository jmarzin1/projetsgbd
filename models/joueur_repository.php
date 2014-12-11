<?php

include_once("models/database_connector.php");
include_once("models/joueur.php");

class JoueurRepository extends DatabaseConnector {
    const FIND_ALL = "SELECT * FROM JOUEUR";
    const FIND_BY_TEAM = "SELECT * FROM JOUEUR WHERE NUMERO_EQUIPE=";

    public function findByTeam($noequipe) {
        $reponse = $this->db->query(self::FIND_BY_TEAM . "'$noequipe'");

        $joueurs = array();
        while ($data = $reponse->fetch()) {
            $joueur = new Joueur();
            $joueur->nolicence = $data['NUMERO_LICENCE'];
            $joueur->prenom = $data['PRENOM_JOUEUR'];
            $joueur->nom = $data['NOM_JOUEUR'];
            $joueur->adresse = $data['ADRESSE_JOUEUR'];
            $joueur->dob = $data['DATE_NAISSANCE_JOUEUR'];
            $joueur->noequipe = $data['NUMERO_EQUIPE'];
            array_push($joueurs, $joueur);
        }
        $reponse->closeCursor();

        return $joueurs;
    }

    public function findAll() {
        $reponse = $this->db->query(self::FIND_ALL);

        $joueurs = array();
        while ($data = $reponse->fetch()) {
            $joueur = new Joueur();
            $joueur->nolicence = $data['NUMERO_LICENCE'];
            $joueur->prenom = $data['PRENOM_JOUEUR'];
            $joueur->nom = $data['NOM_JOUEUR'];
            $joueur->adresse = $data['ADRESSE_JOUEUR'];
            $joueur->dob = $data['DATE_NAISSANCE_JOUEUR'];
            $joueur->noequipe = $data['NUMERO_EQUIPE'];
            array_push($joueurs, $joueur);
        }
        $reponse->closeCursor();

        return $joueurs;
    }
}

?>
