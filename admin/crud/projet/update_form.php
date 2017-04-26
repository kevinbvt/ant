<?php
require_once '../../../model/database.php';
$id = $_GET['id'];
$categorie = getCategorie($id);

require_once '../../layout/header.php';
?>

<h1>Modifier une catégorie</h1>

<form action="update_query.php" method="POST">
    <div>
        <label>Nom</label>
        <input type="text" name="libelle" value="<?php echo $categorie['nom']; ?>">
    </div>
    <input type="hidden" name="id" value="<?php echo $categorie['id']; ?>">
    <input type="submit">
</form>


<?php require_once '../../layout/footer.php'; ?>
