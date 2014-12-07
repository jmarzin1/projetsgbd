<?php include("models/responsable.php"); ?>

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
	    $responsableRepository = new ResponsableRepository;
	    if (isset($_GET['noclub']))
	    {
		$_GET['noclub'] = (int) $_GET['noclub'];
		$noclub = mysql_real_escape_string($_GET['noclub']);
		foreach($responsableRepository->findByNoClub($noclub) as $responsable) {
		    $responsable->toString();
		}
	    }
	    else {
		foreach ($responsableRepository->findAll() as $responsable) {
		    $responsable->toString();
		}
	    }
	    ?>
	</p>
	<!-- footer -->
	<?php include("footer.php"); ?> 
    </body>
</html>
