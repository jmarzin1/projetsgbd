<?php include("models/club.php"); ?>

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
            $clubRepository = new ClubRepository();
	    if (isset($_GET['id']))
	    {
		$_GET['id'] = (int) $_GET['id'];
		$id = mysql_real_escape_string($_GET['id']);
		foreach($clubRepository->findById($id) as $club) {
		    $club->toString();
		}
	    }
	    else {
                foreach ($clubRepository->findAll() as $club) {
                    $club->toString();
                }
	    }
            ?>
        </p>

        <!-- footer -->
        <?php include("footer.php"); ?>
    </body>
</html>
