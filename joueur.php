<?php include("models/joueur.php"); ?>

<!DOCTYPE html>
<html>

    <!-- head -->
    <?php include("head.php"); ?> 
    
    
    <body>
	<!-- L'en-tête -->
	<?php include("header.php"); ?> 
	
	<!-- Menu -->
	<?php include("menu.php"); ?> 

	<p>
	    <?php 
	    $joueurRepository = new JoueurRepository();
	    if (isset($_GET['noequipe']))
	    {
		$_GET['noequipe'] = (int) $_GET['noequipe'];
		$noequipe = mysql_real_escape_string($_GET['noequipe']);
		foreach($joueurRepository->findByTeam($noequipe) as $joueur) {
		    $joueur->toString();
		}
	    }
	    else {
		foreach ($joueurRepository->findAll() as $joueur) {
		    $joueur->toString();
		}
	    }
	    ?>
	</p>
	
	<!-- footer -->
	<?php include("footer.php"); ?> 
    </body>
</html>
