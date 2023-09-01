<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bibliophp/assets/css/connection.css">
    <title>Document</title>
</head>

<body>
    <?php include_once("./inc/nav.php"); ?>
    <form class="formConnection" action="./model/security.php" method="post">
        <h2>Page de connexion</h2>

        <?php if (!empty($_SESSION["error"])) { ?>
            <p>
                <?= $_SESSION["error"]; ?>
            </p>
        <?php }
        unset($_SESSION['error']); ?>
        <div>
            <label for="email">Email : </label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <input type="submit" value="connexion" name="connexion">
        </div>

    </form>
</body>

</html>