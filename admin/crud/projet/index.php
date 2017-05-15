<?php
require_once '../../../model/database.php';
require_once '../../layout/header.php';
$liste_projets = getAllProjets($user['id']);
?>

<h1>Liste des Projets</h1>

<a href="insert_form.php">Ajouter</a>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_projets as $projet) : ?>
        <tr>
            <td><?php echo $projet['nom_projet']; ?></td>
            <td>
                <a href="show.php?id=<?php echo $projet['id']; ?>">Afficher</a>
                <a href="update_form.php?id=<?php echo $projet['id']; ?>">Modifier</a>
                <form action="delete_query.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $projet['id']; ?>">
                    <input type="submit" value="Supprimer">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php'; ?>