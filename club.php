<?php include("models/club.php"); ?>
<?php include("header.php"); ?>
<p>
    <?php
        $clubRepository = new ClubRepository();
        if (isset($_GET['id']))
        {
            $_GET['id'] = (int) $_GET['id'];
            $id = mysql_real_escape_string($_GET['id']);
            foreach($clubRepository->findById($id) as $club) {
                $club->toString();
            }
        } else {
            foreach ($clubRepository->findAll() as $club) {
                $club->toString();
            }
        }
    ?>
</p>
<?php include("footer.php"); ?>
