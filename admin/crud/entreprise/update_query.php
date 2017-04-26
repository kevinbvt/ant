<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$ville = $_POST['ville'];
$code_postal = $_POST['code_postal'];
$adresse = $_POST['adresse'];
$date_creation = $_POST['date_creation'];
$telephone = $_POST['telephone'];
$siret = $_POST['siret'];
$bic = $_POST['bic'];
$iban = $_POST['iban'];

updateEntreprise($id, $ville, $code_postal);

header("Location: index.php");