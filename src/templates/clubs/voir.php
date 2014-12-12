<div class="row">
    <h2>
        <small>Club </small><?php echo $club->getNom() . " de " . $club->getLocalisation() ?>
        <span class="right">
            <a href='?action=editer&id=<?php echo $club->getId() ?>' data-tooltip aria-haspopup='true' class='has-tip' title='Éditer ce club' style='margin-right: .5em'><i class='fa fa-pencil'></i></a>
            <a href='?action=supprimer&id=<?php echo $club->getId() ?>' data-tooltip aria-haspopup='true' class='has-tip' title='Supprimer ce club'><i class='fa fa-times'></i></a>
        </span>
    </h2>

    <h3><small>Entraineur: </small><a href="entraineurs.php?action=voir&id=<?php echo $entraineur->getId() ?>"><?php echo $entraineur->getNom() . " " . $entraineur->getPrenom() ?></a></h3>

    <h3><small>Liste des </small>Responsables</h3>

    <table width=100%>
        <thead>
            <tr>
                <th width="50">Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Fonction</th>
                <th width=100>Actions <a href="?action=ajouter" data-tooltip aria-haspopup="true" class="has-tip right" title="Ajouter un responsable pour ce club"><i class="fa fa-plus"></i></a></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($responsables as $responsable) {
                    echo "
                        <tr>
                            <td>" . $responsable->getId() . "</td>
                            <td>" . $responsable->getNom() . "</td>
                            <td>" . $responsable->getPrenom() . "</td>
                            <td>" . $responsable->getFonction() . "</td>
                            <td class='text-center'>
                                <a href='?action=voir&id=" . $club->getId() . "' data-tooltip aria-haspopup='true' class='has-tip' title='Voir ce responsable' style='margin-right: .5em'><i class='fa fa-search'></i></a>
                                <a href='?action=supprimer&id=" . $club->getId() . "' data-tooltip aria-haspopup='true' class='has-tip' title='Supprimer ce responsable du club'><i class='fa fa-times'></i></a>
                            </td>
                        </tr>
                ";
                }
            ?>
        </tbody>
    </table>

    <h3><small>Liste des </small>Joueurs</h3>

    <table width=100%>
        <thead>
            <tr>
                <th width="50">Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Fonction</th>
                <th width=100>Actions <a href="?action=ajouter" data-tooltip aria-haspopup="true" class="has-tip right" title="Ajouter un responsable pour ce club"><i class="fa fa-plus"></i></a></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($responsables as $responsable) {
                    echo "
                        <tr>
                            <td>" . $responsable->getId() . "</td>
                            <td>" . $responsable->getNom() . "</td>
                            <td>" . $responsable->getPrenom() . "</td>
                            <td>" . $responsable->getFonction() . "</td>
                            <td class='text-center'>
                                <a href='?action=voir&id=" . $club->getId() . "' data-tooltip aria-haspopup='true' class='has-tip' title='Voir ce responsable' style='margin-right: .5em'><i class='fa fa-search'></i></a>
                                <a href='?action=supprimer&id=" . $club->getId() . "' data-tooltip aria-haspopup='true' class='has-tip' title='Supprimer ce responsable du club'><i class='fa fa-times'></i></a>
                            </td>
                        </tr>
                ";
                }
            ?>
        </tbody>
    </table>
</div>
