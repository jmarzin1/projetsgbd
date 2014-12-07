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
	    foreach ($joueurRepository->findAll() as $joueur) {
		$joueur->toString();
	    }
	    ?>
	</p>
	
	<!-- footer -->
	<?php include("footer.php"); ?> 
    </body>
</html>
