<!DOCTYPE html>
<html>

    <!-- head -->
    <?php include("head.php"); ?> 
    
    
    <body>
	
	<!-- L'en-tête -->
	<?php include("header.php"); ?> 
	
	<!-- Menu -->
	<?php include("menu.php"); ?> 

	<!-- connexion  -->
	<?php
	include("connexionbase.php");
	include("requetesajout.php");
	?>

	
	<?php 
	$req = NULL;
	$nomclub = $_POST['nomclub'];
	$localisationclub = $_POST['localisation'];
	
	ajouteClub($nomclub, $localisationclub, $bdd, $req);

	?>
	<!-- footer -->
	<?php include("foot.php"); ?> 
    </body>
</html>
