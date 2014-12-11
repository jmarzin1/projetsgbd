<?php include("header.php"); ?>
<form action="cibleentraineur.php" method="post">
    <p>
        <label>Numéro du Club
            <input type="text" name ="noclub" id="noclub" placeholder="Numéro du Club" required/>
        </label>
        <label>Nom
            <input type="text" name="nom" id="nom" placeholder="Nom de l'Entraineur" required/>
        </label>
        <label>Prénom
            <input type="text" name="prenom" placeholder="Prénom de l'Entraineur" required/>
        </label>
        <label>Date
            <input type="date" name="date" placeholder="Date d'entrée" required/>
        </label>
        <input type="submit" value="Valider"/>
    </p>
</form>
<?php include("footer.php"); ?>
