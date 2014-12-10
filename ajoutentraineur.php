<?php include("header.php"); ?> 
<form action="cibleentraineur.php" method="post">
    <p>
        Numéro de Club: <input type="text" name ="noclub"/>
        Nom Entraîneur: <input type="text" name ="nom"/>
        Prénom Entraîneur: <input type="text" name ="prenom"/>
        Date entrée: <input type="date" name ="date"/>
        <input type="submit" value="Valider"/>
    </p>
</form>
<?php include("footer.php"); ?>
