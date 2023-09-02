<?php 
session_start();
if (!isset($_SESSION["id"])) {
    header("Location: http://localhost/bibliophp/connection.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/book.css">
    <title>Document</title>
</head>

<body>
    <?php include_once("../bibliophp/inc/nav.php"); ?>
    <form method="POST" action="./model/db_book.php">
        <h1>Livres</h1>
        <div class="flex">
            <input type="text" name="title" placeholder="Titre" required>
            <input type="text" name="author" placeholder="Auteur" required>
            <input type="date" name="publication" placeholder="publication" required>
            <input type="number" name="stock" placeholder="Stock">
        </div>
        <div class="buttons">
            <button type="submit" name="ajouter">Ajouter</button>
            <button type="submit"><a href="index.php">retour</a></button>
        </div>
    </form>
</body>

</html>