<?php include("header.php"); ?>
<?php
    include("connexionbase.php");
    include("requetesajout.php");
?>

<?php
    $req = NULL;
    $nomclub = $_POST['nomclub'];
    $localisationclub = $_POST['localisation'];

    ajouteClub($nomclub, $localisationclub, $bdd, $req);
?>
<?php include("footer.php"); ?>
