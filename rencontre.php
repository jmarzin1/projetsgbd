<?php include("models/rencontre.php"); ?>
<?php include("header.php"); ?>
<p>
    <?php
        $rencontreRepository = new RencontreRepository();
        foreach ($rencontreRepository->findAll() as $rencontre) {
            $rencontre->toString();
        }
    ?>
</p>
<?php include("footer.php"); ?>
