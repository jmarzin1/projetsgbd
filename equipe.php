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
	    if (isset($_GET['id']))
	    {
		$_GET['id'] = (int) $_GET['id'];
		$id = mysql_real_escape_string($_GET['id']);
		foreach($equipeRepository->findByClubId($id) as $equipe) {
		    $equipe->toStringClub();
		}
	    }
	    else {
		foreach ($equipeRepository->findAll() as $equipe) {
		    $equipe->toString();
		}
	    }
	    ?>
	</p>
	<!-- footer -->
	<?php include("footer.php"); ?> 
    </body>
</html>
