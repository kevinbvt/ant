<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$nom = $_POST['nom'];
$adresse = $_POST['adresse'];
$code_postal = $_POST['code_postal'];
$ville = $_POST['ville'];
$telephone = $_POST['telephone'];

insertClient($nom, $adresse, $code_postal, $ville, $telephone, $user["id"]);

header("Location: index.php");