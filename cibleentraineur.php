<?php include("models/entraineur.php"); ?>

<?php include("header.php"); ?>

<p>
    <?php
        $entraineur = new Entraineur();
        $entraineur->setNoclub($_POST['noclub']);
        $entraineur->setNom($_POST['nom']);
        $entraineur->setPrenom($_POST['prenom']);
        $entraineur->setDate($_POST['date']);
        $entraineur->save();
    ?>
</p>
<?php include("footer.php"); ?>
