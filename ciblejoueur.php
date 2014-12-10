<?php include("models/ajoutJoueur.php"); ?>

<?php include("header.php"); ?>

<p>
    <?php
    $ajoutJoueurRepository = new AjoutJoueurRepository();
	$noclub = $_POST['noclub'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$date = $_POST['date'];
	$adresse = $_POST['adresse'];
	$dob = $_POST['dob'];
	 if (($noclub != NULL) AND ($nom != NULL) AND ($prenom != NULL) AND ($date != NULL) AND ($adresse != NULL) AND ($dob != NULL)) {
	$ajoutJoueurRepository->joueurPrepare($noclub, $nom, $prenom, $date, $adresse, $dob);
	$ajoutJoueurRepository->joueurAdd();
    }
    else {
	echo "Tous les champs n'ont pas été renseignés<br> Ajout impossible";
    }
    ?>
</p>
<?php include("footer.php"); ?>
