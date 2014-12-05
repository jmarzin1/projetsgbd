<!DOCTYPE html>
<html>

    <!-- head -->
    <?php include("head.php"); ?> 
    
    
    <body>
	
	<!-- L'en-tête -->
	<?php include("header.php"); ?> 
	
	<!-- Menu -->
	<?php include("menu.php"); ?> 

	<!-- connexion + chargement requetes  -->
	<?php 
	include("connexionbase.php");
	include("requetes.php");
	?>

        <p>
	    <?php 
	    $reponse = NULL;
	    if (isset($_GET['noequipe'])) 
	    {
		// 1 : On force la conversion en nombre entier
		$_GET['noclub'] = (int) $_GET['noclub'];
		$noclub = mysql_real_escape_string($_GET['noclub']);
		
		requeteVictoireEquipe($noequipe, $reponse, $bdd);
		
	    }
	    else
	    {
		requeteGenVictoireEquipe($reponse, $bdd);
	    }
	    ?>
	</p>
	<!-- footer -->
	<?php include("foot.php"); ?> 
    </body>
</html>
