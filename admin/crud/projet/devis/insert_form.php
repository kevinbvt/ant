<?php
require_once '../../../security.php';
require_once '../../../../model/database.php';

$projet_id = $_GET['projet_id'];
$projet = getProjet($projet_id);

$liste_clients = getAllClients($user['id']);
$liste_categories = getAllCategories($user['id']);

require_once '../../../layout/header.php';
?>

<h1>Ajouter un nouveau devis au projet <?php echo $projet["nom_projet"] ?></h1>

<form action="insert_query.php" method="POST">
    <div>
        <label>Référence</label>
        <input type="text" name="reference">
    </div>
    <input type="hidden" name="projet_id" value="<?php echo $projet["id"] ?>">
    <input type="submit">
</form>


<?php require_once '../../../layout/footer.php'; ?>
