<?php 

function ajouteClub($nomclub, $localisationclub, $bdd, $req)
{
    try{
	$req = $bdd->prepare('INSERT INTO CLUB (NOM_CLUB, LOCALISATION)  VALUES(:NOM_CLUB, :LOCALISATION)
				  ');
	$req->execute(array(
	    ':NOM_CLUB' => $nomclub,
		':LOCALISATION' => $localisationclub
	));
	echo 'Le CLUB a bien été ajouté !';
	//echo $bdd->lastInsertId();
    }
    catch (PDOException $e)
    {
	die('Erreur : ' . $e->getMessage());
    }
}


?>
