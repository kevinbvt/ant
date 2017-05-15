<?php
require_once '../../../model/database.php';
$id = $_GET['id'];
$projet = getProjet($id);
$liste_devis = getAllDevisByProjet($id);

require_once '../../layout/header.php';
?>

<h1><?php echo $projet["nom_client"] ?> - <?php echo $projet["nom_projet"]; ?></h1>

<a href="devis/insert_form.php?projet_id=<?php echo $projet["id"] ?>">Ajouter un devis</a>

<table>
    <thead>
        <tr>
            <th>Reference</th>
            <th>Date création</th>
            <th>Valide</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_devis as $devis) : ?>
        <tr>
            <td><?php echo $devis['reference']; ?></td>
            <td><?php echo $devis['date_creation']; ?></td>
            <td><?php echo $devis['is_valide']; ?></td>
            <td>
                <a href="show.php?id=<?php echo $devis['id']; ?>">Afficher</a>
                <a href="update_form.php?id=<?php echo $devis['id']; ?>">Modifier</a>
                <form action="delete_query.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $devis['id']; ?>">
                    <input type="submit" value="Supprimer">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../../layout/footer.php'; ?>
