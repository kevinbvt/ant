<?php require_once '../../layout/header.php'; ?>

<h1>Ajouter un nouveau client</h1>

<form action="insert_query.php" method="POST">
    <div>
        <label>Nom</label>
        <input type="text" name="nom">
    </div>
    <div>
        <label>Adresse</label>
        <input type="text" name="adresse">
    </div>
    <div>
        <label>Code Postal</label>
        <input type="text" name="code_postal">
    </div>
    <div>
        <label>Ville</label>
        <input type="text" name="ville">
    </div>
    <div>
        <label>Téléphone</label>
        <input type="text" name="telephone">
    </div>
    <div>
        <label>Entreprise</label>
        <input type="text" name="telephone">
    </div>
    <input type="submit">
</form>


<?php require_once '../../layout/footer.php'; ?>
