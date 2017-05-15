<?php
require_once '../../../security.php';
require_once '../../../../model/database.php';

$reference = $_POST['reference'];
$projet_id = $_POST['projet_id'];

insertDevis($reference, $projet_id);

header("Location: ../show.php?id=" . $projet_id);