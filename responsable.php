<?php include("models/responsable.php"); ?>
<?php include("header.php"); ?>
<p>
    <?php
        $responsableRepository = new ResponsableRepository;
        if (isset($_GET['noclub'])) {
            $_GET['noclub'] = (int) $_GET['noclub'];
            $noclub = mysql_real_escape_string($_GET['noclub']);
            foreach($responsableRepository->findByNoClub($noclub) as $responsable) {
                $responsable->toString();
            }
        } else {
            foreach ($responsableRepository->findAll() as $responsable) {
                $responsable->toString();
            }
        }
    ?>
</p>
<?php include("footer.php"); ?>
