<?php

function getDatabase() {
    try {
        $bdd = new PDO('mysql:host=mysql.silverwyrda.org;dbname=projetsql', 'jmarzin', 'jmarzin');
        return $bdd;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

?>
