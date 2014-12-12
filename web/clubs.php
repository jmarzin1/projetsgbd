<?php

session_start();

require_once(realpath(dirname(__FILE__) . "/../src/config.php"));
require_once(MODULES_PATH . "/template_helpers.php");

require_once(MODELS_PATH . "/club_repository.php");
require_once(MODELS_PATH . "/entraineur_repository.php");
require_once(MODELS_PATH . "/responsable_repository.php");

$cr = new ClubRepository();
$er = new EntraineurRepository();
$rr = new ResponsableRepository();

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
    case "ajouter":
        break;
    case "editer":
        break;
    case "supprimer":
        break;
    case "voir":
        if (isset($_GET['id'])) {
            $club_id = intval($_GET['id']);

            render("clubs/voir", array(
                'club' => $cr->findById($club_id),
                'entraineur' => $er->findOneByClubId($club_id),
                'responsables' => $rr->findByClubId($club_id)
            ));
        } else {
            $_SESSION['flash'] = "Aucun id renseigné";

            render("clubs/liste", array('clubs' => $cr->findAll()));
        }
        break;
    default:
        render("clubs/liste", array('clubs' => $cr->findAll()));
    }
} else {
    render("clubs/liste", array('clubs' => $cr->findAll()));
}

?>
