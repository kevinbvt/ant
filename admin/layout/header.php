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
          <div class="nav--logo">
               <a href="<?php echo $siteurl; ?>admin/" class="nav--logo-svg" href=""><svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 694 500" style="enable-background:new 0 0 694 500;" xml:space="preserve">
    <path class="st0" d="M315.7,293.8c-0.5,0-1-0.2-1.3-0.7L157,82.1c-0.5-0.7-0.4-1.8,0.3-2.3c0.7-0.6,1.8-0.4,2.3,0.3L317,291.2
        c0.5,0.7,0.4,1.8-0.3,2.3C316.4,293.7,316.1,293.8,315.7,293.8z"/>
    <circle class="st0" cx="163.6" cy="87.6" r="16.6"/>
    <path class="st0" d="M371.3,293.8c0.5,0,1-0.2,1.3-0.7L530,82.1c0.5-0.7,0.4-1.8-0.3-2.3c-0.7-0.6-1.8-0.4-2.3,0.3L370,291.2
        c-0.5,0.7-0.4,1.8,0.3,2.3C370.6,293.7,370.9,293.8,371.3,293.8z"/>
    <circle class="st0" cx="523.4" cy="87.6" r="16.6"/>
    <path class="st0" d="M459.4,251.5c-0.9-1.2-1.9-2.4-3-3.5c-24.8-27.7-66.4-45.9-113.4-45.9c-49.7,0-93.3,20.3-117.5,50.7
        c-0.1,0.1-0.2,0.2-0.3,0.3c-12.6,16-19.9,34.8-19.9,54.9c0,1.9,0.1,3.8,0.2,5.7c1.3,19.2,9.3,37.1,22.2,52.3
        c24.6,28.9,67,48,115.3,48c45.4,0,85.6-16.9,110.6-42.9c16.2-16.8,26.2-37.4,27-59.6v-0.1c0.1-1.2,0.1-2.2,0.1-3.4
        C480.8,287.3,473,267.8,459.4,251.5z M275.1,313.8c-10.2-3.7-33.3-21-27.7-36.3c5.6-15.3,18.4-24.8,28.7-21
        c10.2,3.7,17.1,12.4,18,28.7C295.5,308,285.4,317.6,275.1,313.8z M411.7,313.8c-10.2,3.7-20.3-5.8-19-28.6c0.9-16.3,7.8-25,18-28.7
        c10.2-3.7,23.1,5.7,28.7,21C445,292.8,422,310.1,411.7,313.8z"/>
    </svg></a>
           </div>
            <nav class="nav--up">
                <a class="active" href="<?php echo $siteurl; ?>admin/profil.php">Mon profil</a>
                <a href="<?php echo $siteurl; ?>admin/crud/entreprise/">Mon auto-entreprise</a>
                <a href="<?php echo $siteurl; ?>admin/crud/client/">Mes clients</a>            
                <a href="<?php echo $siteurl; ?>admin/crud/client/">Mes projets</a>            
                <a href="<?php echo $siteurl; ?>admin/crud/categorie/">Categories</a>
                <a href="<?php echo $siteurl; ?>admin/logout.php">Se deconnecter</a>
            </nav>
            
            <nav class="nav--down">
                <a href="">Support</a>
                <a href="">Contactez-nous</a>
                <a href="">Remerciement</a>
                <a href="">Mention légales</a>
            </nav>
                <a class="mention" href="">ant.pro©2017</a>
        </div>