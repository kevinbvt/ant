<?php
require_once '../../../model/database.php';
$id = $_GET['id'];
$client = getClient($id);

require_once '../../layout/header.php';
?>

<h1>Modifier un client</h1>

<form action="update_query.php" method="POST">
    <div>
        <label>Nom</label>
        <input type="text" name="nom" value="<?php echo $client['nom']; ?>">
    </div>
    <div>
        <label>Adresse</label>
        <input type="text" name="adresse" value="<?php echo $client['adresse']; ?>">
    </div>
    <div>
        <label>Code Postal</label>
        <input type="text" name="code_postal" value="<?php echo $client['code_postal']; ?>">
    </div>
    <div>
        <label>Ville</label>
        <input type="text" name="ville" value="<?php echo $client['ville']; ?>">
    </div>
    <div>
        <label>Telephone</label>
        <input type="text" name="telephone" value="<?php echo $client['telephone']; ?>">
    </div>
    <input type="hidden" name="id" value="<?php echo $client['id']; ?>">
    <input type="submit">
</form>


<?php require_once '../../layout/footer.php'; ?>
