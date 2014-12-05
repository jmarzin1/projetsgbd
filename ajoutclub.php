<!DOCTYPE html>
<html>
    
    <!-- head -->
    <?php include("head.php"); ?> 
    
    
    <body>
	
	<!-- L'en-tête -->
	<?php include("header.php"); ?> 
	
	<!-- Menu -->
	<?php include("menu.php"); ?> 
	
	
	<form action="cibleclub.php" method="post">
	    <p>
		<input type="text" name ="nomclub"/>
		<input type="text" name ="localisation"/>
		<input type="submit" value="Valider"/>
	    </p>
	</form>
	
	<?php include("foot.php"); ?> 
    </body>
</html>
