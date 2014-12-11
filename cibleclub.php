<?php include("models/club.php"); ?>

<?php include("header.php"); ?>
<p>
    <?php
    $club = new Club();
    $club->setNom($_POST['nomclub']);
    $club->setLocalisation($_POST['localisation']);
    $club->save();
?>
<?php include("footer.php"); ?>
