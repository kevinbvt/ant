<?php require_once '../../layout/header.php'; ?>

<h1>Ajouter une nouvelle catégorie</h1>

<form action="insert_query.php" method="POST">
    <div>
        <label>Libellé</label>
        <input type="text" name="libelle_cat">
    </div>
    <input type="submit">
</form>


<?php require_once '../../layout/footer.php'; ?>
