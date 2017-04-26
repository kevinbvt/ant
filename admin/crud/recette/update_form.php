<?php
require_once '../../../model/database.php';
$id = $_GET['id'];
$recette = getRecette($id);
$liste_categories = getAllCategories();

require_once '../../layout/header.php';
?>

<h1>Modifier une recette</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div>
        <label>Titre</label>
        <input type="text" name="titre" value="<?php echo $recette['titre']; ?>">
    </div>
    <div>
        <label>Image</label>
        <input type="file" name="image">
        <br>
        <img src="../../../images/<?php echo $recette['image']; ?>" class="img-thumbnail">
    </div>
    <div>
        <label>Description courte</label>
        <textarea name="description_courte"><?php echo $recette['description_courte']; ?></textarea>
    </div>
    <div>
        <label>Description</label>
        <textarea name="description"><?php echo $recette['description']; ?></textarea>
    </div>
    <div>
        <label>Catégorie</label>
        <select name="categorie_id">
            <?php foreach ($liste_categories as $categorie) : ?>
                <?php
                $selected = "";
                if ($categorie['id'] == $recette['categorie_id']) {
                    $selected = "selected";
                }
                ?>
                <option value="<?php echo $categorie['id']; ?>" <?php echo $selected; ?>>
                    <?php echo $categorie['libelle']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <input type="hidden" name="id" value="<?php echo $recette['id']; ?>">
    <input type="submit">
</form>


<?php require_once '../../layout/footer.php'; ?>
