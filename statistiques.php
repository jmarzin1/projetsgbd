<?php include("models/statsEquipe.php"); ?>

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
	    $statsEquipeRepository = new StatsEquipeRepository();
	    foreach($statsEquipeRepository->findAll() as $statsEquipe) {
		$statsEquipe->toString();	
	    }
	    ?>
	</p>
	<!-- footer -->
	<?php include("footer.php"); ?> 
    </body>
</html>
