<?php

require_once 'model/database.php';

$mail = $_POST["mail"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

insertUser($mail, $password);

header("Location: index.php");