<!DOCTYPE html>
<html>
    <!-- head -->
    <?php include("head.php"); ?>

    <body>
        <nav class="top-bar" data-topbar role="navigation">
            <ul class="title-area">
                <li class="name">
                    <h1><a href="index.php">Basket</a></h1>
                </li>
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>

            <section class="top-bar-section">
                <ul class="right">
                    <li class="has-dropdown">
                        <a href="#">Clubs</a>
                        <ul class="dropdown">
                            <li><a href="ajoutclub.php">Ajout</a></li>
                            <li><a href="club.php">Liste</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">Entraineurs</a>
                        <ul class="dropdown">
                            <li><a href="ajoutentraineur.php">Ajout</a></li>
                            <li><a href="entraineur.php">Liste</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">Joueurs</a>
                        <ul class="dropdown">
                            <li><a href="ajoutjoueur.php">Ajout</a></li>
                            <li><a href="joueur.php">Liste</a></li>
                        </ul>
                    </li>
                    <li><a href="equipe.php">Équipes</a></li>
                    <li><a href="rencontre.php">Rencontres</a></li>
                    <li><a href="responsable.php">Bureau</a></li>
                    <li><a href="statistiques.php">Statistiques</a></li>
                </ul>
            </section>
        </nav>
