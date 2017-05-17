<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$liste_clients = getAllClients($user['id']);
$liste_categories = getAllCategories($user['id']);

require_once '../../layout/header.php';
?>

<h1>Ajouter un nouveau projet</h1>

<form action="insert_query.php" method="POST">
    <div>
        <label>Projet</label>
        <input type="text" name="nom_projet">
        <label>Client</label>
        <select name="clients_id">
            <option>Choisir un client</option>
            <?php foreach ($liste_clients as $client) : ?>
            <option value="<?php echo $client['id'] ?>"><?php echo $client['nom'] ?></option>
            <?php endforeach; ?>
        </select>
        <label>Catégorie</label>
        <select name="categorie_id">
            <option>Choisir une catégorie</option>
            <?php foreach ($liste_categories as $categorie) : ?>
            <option value="<?php echo $categorie['id'] ?>"><?php echo $categorie['nom'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <input type="submit">
</form>


<?php require_once '../../layout/footer.php'; ?>
