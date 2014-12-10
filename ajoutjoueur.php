<?php include("header.php"); ?> 
<form action="ciblejoueur.php" method="post">
    <p>
        Numéro de Club: <input type="text" name ="noclub"/>
        Nom Joueur: <input type="text" name ="nom"/>
        Prénom Joueur: <input type="text" name ="prenom"/>
        Adresse joueur: <input type="text" name ="adresse"/>
        Date de Naissance joueur: <input type="date" name ="dob"/>
        Date: <input type="date" name ="date"/>
        <input type="submit" value="Valider"/>
    </p>
</form>
<?php include("footer.php"); ?>
