<?php require_once("../inc/function.php");

if (isset($_POST["ajouter"])) {

    $title = $_POST['title'];
    $author = $_POST['author'];
    $publish = $_POST['publication'];
    $stock = $_POST['stock'];
}


//Connexion base de données : 
$dbConnexion = dbConnexion();

// Préparation de la requête : 

$request = $dbConnexion->prepare('INSERT INTO books (title,author,publication,stock) VALUES (?,?,?,?)');

// Execution de la requête avec verification : 

try {
    $request->execute(array($title, $author, $publish, $stock));
} catch (PDOException $error) {
    echo $error->getMessage();
}


echo "<p> Livre ajouté </p>";