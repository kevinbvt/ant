<?php
require_once __DIR__ . '/../../config/parameters.php';
require_once __DIR__ . '/../security.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Administration</title>
        <link rel="stylesheet" href="<?php echo $siteurl; ?>admin/css/style.css"/>
    </head>
    <body>

        <nav>
            <ul>
                <li><a href="<?php echo $siteurl; ?>admin/crud/projet/">Mes projets</a></li>
                <li><a href="<?php echo $siteurl; ?>admin/crud/entreprise/">Mon Entreprise</a></li>
                <li><a href="<?php echo $siteurl; ?>admin/crud/client/">Mes clients</a></li>                
                <li><a href="<?php echo $siteurl; ?>admin/crud/categorie/">Catégories</a></li>
                <li><a href="<?php echo $siteurl; ?>admin/">Dashboard</a></li>
                <li><a href="<?php echo $siteurl; ?>admin/logout.php">Logout</a></li>
            </ul>
        </nav>