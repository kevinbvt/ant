<?php
require_once '../../../model/database.php';
$liste_recettes = getAllRecettes();

require_once '../../layout/header.php';
?>

<h1>Liste des recettes</h1>

<a href="insert_form.php">Ajouter</a>

<table>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Date de création</th>
            <th>Catégorie</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_recettes as $recette) : ?>
        <tr>
            <td><?php echo $recette['titre']; ?></td>
            <td><?php echo $recette['date_creation_format']; ?></td>
            <td><?php echo $recette['categorie_libelle']; ?></td>
            <td><?php echo $recette['description_courte']; ?></td>
            <td>
                <a href="update_form.php?id=<?php echo $recette['id']; ?>">Modifier</a>
                <form action="delete_query.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $recette['id']; ?>">
                    <input type="submit" value="Supprimer">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php'; ?>