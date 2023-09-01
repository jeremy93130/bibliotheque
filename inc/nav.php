<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bibliophp/assets/css/nav.css">
    <title>Document</title>
</head>

<body>

    <nav>
        <ul>
            <li><a href="http://localhost/bibliophp/" id="biblio">BIBLIOTHEQUE</a></li>
        </ul>
        <ul>
            <?php if (isset($_SESSION["id"])) { ?>
                <nav>
                    <ul>
                        <form id="decoForm" method="POST">
                            <button class="deconnexion" name="deconnexion">Déconnexion</button>

                        </form>
                    </ul>
                </nav>
            <?php } else { ?>
                <nav>
                    <ul>
                        <button class="deconnexion"><a
                                href="http://localhost/bibliophp/connection.php">Connexion</a></button>
                    </ul>
                </nav>
            <?php } ?>
            <li><a href="http://localhost/bibliophp/register.php">Inscription</a></li>
        </ul>
    </nav>


    <?php

    if (isset($_POST["deconnexion"])) {
        session_destroy();
        header("Location: http://localhost/bibliophp/connection.php");
    }

    ?>