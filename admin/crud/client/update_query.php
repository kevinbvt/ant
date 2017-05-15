<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$nom = $_POST['nom'];
$adresse = $_POST['adresse'];
$code_postal = $_POST['code_postal'];
$ville = $_POST['ville'];
$telephone = $_POST['telphone'];

updateClient($id, $adresse, $code_postal, $ville, $telephone);

header("Location: index.php");