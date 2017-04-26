<?php
require_once '../../../model/database.php';
require_once '../../layout/header.php';

$entreprise = getEntreprise($user['id']);
?>

<h1>Mon entreprise</h1>

<form action="update_query.php" method="POST">
    <div>
        <label>Ville</label>
        <input type="text" name="ville" value="<?php echo $entreprise['ville']; ?>">
        <label>Code postal</label>
        <input type="text" name="code_postal" value="<?php echo $entreprise['code_postal']; ?>">
        <label>Adresse</label>
        <input type="text" name="adresse" value="<?php echo $entreprise['adresse']; ?>">
        <label>Date de création</label>
        <input type="date" name="date_creation" value="<?php echo $entreprise['date_creation']; ?>">
        <label>Téléphone</label>
        <input type="text" name="telephone" value="<?php echo $entreprise['telephone']; ?>">
        <label>Numéro de SIRET</label>
        <input type="text" name="siret" value="<?php echo $entreprise['siret']; ?>">
        <label>BIC</label>
        <input type="text" name="bic" value="<?php echo $entreprise['bic']; ?>">
        <label>IBAN</label>
        <input type="text" name="iban" value="<?php echo $entreprise['iban']; ?>">
    </div>
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    <input type="submit">
</form>


<?php require_once '../../layout/footer.php'; ?>