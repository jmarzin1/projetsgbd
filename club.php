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
                foreach ($clubRepository->findAll() as $club) {
                    $club->toString();
                }
            ?>
        </p>

        <!-- footer -->
        <?php include("footer.php"); ?>
    </body>
</html>
