<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$nom_projet = $_POST['nom_projet'];
$clients_id = $_POST['clients_id'];
$categorie_id = $_POST['categorie_id'];

insertProjet($nom_projet, $clients_id, $categorie_id);

header("Location: index.php");