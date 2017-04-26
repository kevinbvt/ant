<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$nom = $_POST['nom'];

insertCategorie($user['id'], $nom);

header("Location: index.php");