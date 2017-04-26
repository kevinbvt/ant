<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];

move_uploaded_file($image_tmp, '../../../images/' . $image);

$titre = $_POST['titre'];
$description_courte = $_POST['description_courte'];
$description = $_POST['description'];
$utilisateur_id = $user['id'];
$categorie_id = $_POST['categorie_id'];

insertRecette($titre, $image, $description_courte, $description, $utilisateur_id, $categorie_id);

header("Location: index.php");