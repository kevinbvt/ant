<?php require_once '../../layout/header.php'; ?>

<h1>Ajouter une nouvelle catégorie</h1>

<form action="insert_query.php" method="POST">
    <div>
        <label>Nom</label>
        <input type="text" name="nom">
    </div>
    <input type="submit">
</form>


<?php require_once '../../layout/footer.php'; ?>
