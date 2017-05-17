<?php
require_once __DIR__ . '/../../config/parameters.php';
require_once __DIR__ . '/../security.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Administration</title>
        <link rel="stylesheet" href="<?php echo $siteurl; ?>/css/styles.css"/>
    </head>
    <body>

        <div id="main" class="nav">
           <a class="nav--logo" href=""><img src="" alt=""></a>
            <nav>
                <a href="<?php echo $siteurl; ?>admin/crud/projet/">Mon profil</a>
                <a href="<?php echo $siteurl; ?>admin/crud/entreprise/">Mon auto-entreprise</a>
                <a href="<?php echo $siteurl; ?>admin/crud/client/">Mes clients</a>            
                <a href="<?php echo $siteurl; ?>admin/crud/categorie/">Mon compte</a>
                <a href="<?php echo $siteurl; ?>admin/logout.php">Se deconnecter</a>
            </nav>
            
            <nav class="nav--down">
                <a href="">Support</a>
                <a href="">Contactez-nous</a>
                <a href="">Remerciement</a>
                <a href="">Mention légales</a>
            </nav>
            <a href="">ant.pro©2017</a>
        </div>