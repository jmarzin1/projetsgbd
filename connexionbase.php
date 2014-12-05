<?php 
try
{
    $bdd = new PDO('mysql:host=mysql.silverwyrda.org;dbname=projetsql', 'jmarzin', 'jmarzin');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>
