<?php
require_once '../../../model/database.php';
require_once '../../layout/header.php';
$liste_categories = getAllCategories($user['id']);
?>

<h1>Liste des catégories</h1>

<a href="insert_form.php">Ajouter</a>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_categories as $categorie) : ?>
        <tr>
            <td><?php echo $categorie['nom']; ?></td>
            <td>
                <a href="update_form.php?id=<?php echo $categorie['id']; ?>">Modifier</a>
                <form action="delete_query.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $categorie['id']; ?>">
                    <input type="submit" value="Supprimer">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php'; ?>