<?php
require_once '../../../model/database.php';
require_once '../../layout/header.php';
$liste_clients = getAllClients($user["id"]);
?>

<h1>Liste des clients</h1>

<a href="insert_form.php">Ajouter</a>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Code Postal</th>
            <th>Ville</th>
            <th>Téléphone</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_clients as $client) : ?>
        <tr>
            <td><?php echo $client['nom']; ?></td>
            <td><?php echo $client['adresse']; ?></td>
            <td><?php echo $client['code_postal']; ?></td>
            <td><?php echo $client['ville']; ?></td>
            <td><?php echo $client['telephone']; ?></td>
            <td>     
                <a href="update_form.php?id=<?php echo $client['id']; ?>">Modifier</a>
                <form action="delete_query.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $client['id']; ?>">
                    <input type="submit" value="Supprimer">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php'; ?>