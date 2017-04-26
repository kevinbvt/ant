<?php require_once '../../layout/header.php'; ?>

<h1>Ajouter une nouvelle catégorie</h1>

<form action="insert_query.php" method="POST">
    <div>
        <label>Projet</label>
        <input type="text" name="nom_projet">
        <label>Catégorie</label>
        <input type="text" name="nom_projet">
    </div>
    <input type="submit">
</form>


<?php require_once '../../layout/footer.php'; ?>
