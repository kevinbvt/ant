<?php
require_once __DIR__ . '/model/database.php';

// Démarre la session de l'utilisateur en cours
session_start();

// Je vérifie si l'utilisateur est connecté
if (isset($_SESSION['id'])) {
    // Je récupère les infos de l'utilisateur en cours
    $user = getUser($_SESSION['id']);
    if (isset($user['id'])) {
        header("Location: admin/");
    }
}
?>
<html>

    <head>
        <meta name="charset" content="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>Ant</title>
        <link type="text/css" rel="stylesheet" href="css/login.css" />
        <link type="text/css" rel="stylesheet" href="css/normalize.css" />
    </head>

    <body>
       
        <div id="page">
            <header>
                <nav id="main-nav">
                    <h1 class="bold">Ant</h1>
                    <ul>
                        <li id="link-connexion" class="medium"><a href="#">Connexion</a></li>
                        <li id="link-inscription" class="medium"><a href="#">Inscription</a></li>
                    </ul>
                </nav>

            </header>

            <main>
                <section id="main-section">
                    <h2 class="bold center">Ant</h2>
                    <div></div>
                    <h3 class="regular center">For freelance</h3>

                    <!-- Section Inscription-->
                    <section id="main-inscription">
                        <h4 class="bold center">Inscription</h4>
                        <form action="inscription.php" method="POST">
                            <input type="mail" name="mail" placeholder="E-mail" />
                            <input type="password" name="password" placeholder="Mot de passe" />
                            <input type="password" name="confirm_password" placeholder="Confirmer le mot de passe" />
                            <button type="submit" class="bold" >S'inscrire</button>
                        </form>

                    </section>

                    <section id="main-connexion">
                        <h4 class="bold center">Connexion</h4>

                        <form action="admin/index-profil.php" method="POST">
                            <input type="email" name="email" placeholder="E-mail">
                            <input type="password" name="password" placeholder="Mot de passe">
                            <button type="submit" class="bold" >Se connecter</button>
                        </form>

                    </section>

                    <img src="images/logo.png" alt="Logo Ant"/>
                </section>

            </main>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type="text/javascript" src="js/app.js"></script>
        </div>
    </body>

</html>
