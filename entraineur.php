<?php include("models/entraineur.php"); ?>

<?php include("header.php"); ?>
<p>
    <?php
    $entraineurRepository = new EntraineurRepository();
    if (isset($_GET['id'])) {
        $_GET['id'] = (int) $_GET['id'];
        $id = mysql_real_escape_string($_GET['id']);
        foreach($entraineurRepository->findByClubId($id) as $entraineur) {
            $entraineur->toStringClub();
        }
    } else {
        foreach ($entraineurRepository->findAll() as $entraineur) {
            $entraineur->toString();
        }
    }
    
    ?>
</p>
<?php include("footer.php"); ?>
