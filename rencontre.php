<?php include("models/rencontre.php"); ?>

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
	    $rencontreRepository = new RencontreRepository();
	    foreach ($rencontreRepository->findAll() as $rencontre) {
		$rencontre->toString();
	    }
	    ?>
	</p>
	<!-- footer -->
	<?php include("footer.php"); ?> 
    </body>
</html>
