<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$titre = $_POST['titre'];
$description_courte = $_POST['description_courte'];
$description = $_POST['description'];
$categorie_id = $_POST['categorie_id'];

// Upload de l'image
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
$error = $_FILES['image']['error'];

// Vérifier si un fichier est uploadé
if ($error == UPLOAD_ERR_NO_FILE) {
    $recette = getRecette($id);
    $image = $recette['image'];
} else {
    move_uploaded_file($image_tmp, '../../../images/' . $image);
}

// Enregistrement en base de données
updateRecette($id, $titre, $image, $description_courte, $description, $categorie_id);

header("Location: index.php");