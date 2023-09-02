<?php
include_once("./inc/nav.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bibliophp/assets/css/register.css">
    <title>Document</title>
</head>

<body>
    <form class="formRegister" method="POST" action="./model/db_register.php" enctype="multipart/form-data">
        <h1>Page D'Inscription</h1>
        <div class="flex">
            <div class="formulaire">
                <div class="infos">
                    <select name="genre" id="genre-select">
                        <option value="">--Sexe--</option>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                    </select>
                    <input type="text" name="lastName" placeholder="Nom" required>
                    <input type="text" name="firstName" placeholder="Prénom" required>
                    <input type="email" name="email" placeholder="Votre email" required>
                </div>
                <div class="infos">
                    <input type="password" name="password" placeholder="Mot de passe" required>
                    <input type="password" name="confirm" placeholder="Confirmez votre mot de passe" required>
                    <input type="date" name="birthday" placeholder="Date de naissance" required>
                    <input type="tel" name="phone" placeholder="n° telephone" required>
                </div>
            </div>
            <div class="messages">
                <label for="message">Message : </label>
                <textarea id="message" name="message" rows="5" cols="33">
                </textarea>
                <label for="pays">Pays :</label>
                <select class="form-control" id="pays" name="country">
                    <option value="france">France</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                    <option value="autre">Autre</option>
                </select>
                <label for="conditions">accepter les conditions d'utilisations</label>
                <input type="checkbox" id="conditions" name="conditions">
                <?php if (!empty($_SESSION["errorConditions"])) { ?>
                    <p>
                        <?= $_SESSION["errorConditions"]; ?>
                    </p>
                <?php }
                unset($_SESSION["errorConditions"]); ?>
            </div>
            <div>
                <button type="submit" name="inscription">valider</button>
                <button type="button"><a href="index.php">retour</a></button>
            </div>
        </div>
    </form>
</body>

</html>