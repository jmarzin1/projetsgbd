<?php include("models/ajoutEntraineur.php"); ?>

<?php include("header.php"); ?>

<p>
    <?php
    $ajoutEntraineurRepository = new AjoutEntraineurRepository();
    $noclub = $_POST['noclub'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date = $_POST['date'];
    if (($noclub != NULL) AND ($nom != NULL) AND ($prenom != NULL) AND ($date != NULL)) {
	$ajoutEntraineurRepository->entraineurPrepare($noclub, $nom, $prenom, $date);
	$ajoutEntraineurRepository->entraineurAdd();
    }
    else {
	echo "Tous les champs n'ont pas été renseignés<br> Ajout impossible";
    }
    ?>
</p>
<?php include("footer.php"); ?>
