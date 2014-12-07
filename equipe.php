<?php include("models/equipe.php"); ?>

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
	    $equipeRepository = new EquipeRepository();
	    foreach ($equipeRepository->findAll() as $equipe) {
		$equipe->toString();
	    }
	    ?>
	</p>
	<!-- footer -->
	<?php include("footer.php"); ?> 
    </body>
</html>
