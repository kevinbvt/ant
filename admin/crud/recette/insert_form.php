<?php
require_once '../../../model/database.php';
$liste_categories = getAllCategories();

require_once '../../layout/header.php';
?>

<h1>Ajouter une nouvelle recette</h1>

<form action="insert_query.php" method="POST" enctype="multipart/form-data">
    <div>
        <label>Titre</label>
        <input type="text" name="titre">
    </div>
    <div>
        <label>Image</label>
        <input type="file" name="image">
    </div>
    <div>
        <label>Description courte</label>
        <textarea name="description_courte"></textarea>
    </div>
    <div>
        <label>Description</label>
        <textarea name="description"></textarea>
    </div>
    <div>
        <label>Catégorie</label>
        <select name="categorie_id">
            <?php foreach ($liste_categories as $categorie) : ?>
                <option value="<?php echo $categorie['id']; ?>">
                    <?php echo $categorie['libelle']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <input type="submit">
</form>


<?php require_once '../../layout/footer.php'; ?>
