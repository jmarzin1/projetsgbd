<?php include("models/classement.php"); ?>
<?php include("header.php"); ?>
<p>
    <?php
    $classementRepository = new ClassementRepository();
    foreach ($classementRepository->makeClassement() as $classement) {
        $classement->toString();
    }
    ?>
</p>
<?php include("footer.php"); ?>
