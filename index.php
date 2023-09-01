<?php
session_start();
// require_once("./inc/header.php");
if (isset($_SESSION["id"])) {
    header("Location: http://localhost/bibliophp/connection.php");
} else { ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="../bibliotheque/assets/css/nav.css"> -->
        <link rel="stylesheet" href="../bibliophp/assets/css/index.css">

        <title>Document</title>
    </head>

    <body>
        <div class="container">
            <div>
                <h1>Bienvenue sur le site de la bibliotheque</h1>
            </div>
            <div>
                <button><a href="http://localhost/bibliophp/connection.php">Connexion</a></button>
                <button><a href="http://localhost/bibliophp/register.php">Inscription</a></button>
            </div>
        </div>

    </body>

    </html>

<?php } ?>

<?php
// require_once("./inc/footer.ph    p");
?>