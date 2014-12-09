<?php include("models/joueur.php"); ?>

<?php include("header.php"); ?>
<p>
    <?php
        $joueurRepository = new JoueurRepository();
        if (isset($_GET['noequipe'])) {
            $_GET['noequipe'] = (int) $_GET['noequipe'];
            $noequipe = mysql_real_escape_string($_GET['noequipe']);
            foreach($joueurRepository->findByTeam($noequipe) as $joueur) {
                $joueur->toString();
            }
        } else {
            foreach ($joueurRepository->findAll() as $joueur) {
                $joueur->toString();
            }
        }
    ?>
</p>
<?php include("footer.php"); ?>
