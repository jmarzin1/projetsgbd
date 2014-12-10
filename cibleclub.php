<?php include("models/ajoutClub.php"); ?>

<?php include("header.php"); ?>
<p>
    <?php
    $ajoutClubRepository = new AjoutClubRepository();
    $nomclub = $_POST['nomclub'];
    $localisationclub = $_POST['localisation'];
    $ajoutClubRepository->clubPrepare($localisationclub, $nomclub);
    $ajoutClubRepository->clubAdd();
?>
<?php include("footer.php"); ?>
