<?php include("header.php"); ?>
<?php
    include("connexionbase.php");
    include("requetes.php");
?>

<p>
    <?php
        $reponse = NULL;
        if (isset($_GET['noclub']))
        {
            // 1 : On force la conversion en nombre entier
            $_GET['noclub'] = (int) $_GET['noclub'];
            $noclub = mysql_real_escape_string($_GET['noclub']);

            requeteEntraineur($noclub, $reponse, $bdd);

        } else {
            requeteGenEntraineur($reponse, $bdd);
        }
    ?>
</p>
<?php include("footer.php"); ?>
