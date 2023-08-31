<?php
session_start();
include_once("../inc/db_connection.php");


if (isset($_POST["connexion"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    // Se connecter à la base de données : 
    $db = dBConnexion();

    // Préparation de la requête vers la base de données : 
    $request = $db->prepare("SELECT * FROM user WHERE email = ?");

    // Requete à la base de données : 


    // conversion avec Fetch en tableau Associatif :
    try {
        $request->execute([$email]);
        $user = $request->fetch();
    } catch (PDOException $error) {
        echo $error->getMessage();
    }


    if (empty($user)) {
        echo "<script> location.href='http://localhost/bibliophp/connection.php'</script>";
        $_SESSION["error"] = "Identifiant ou mot de passe incorrect.";
    } else {
        if (password_verify($password, $user["password"])) {
            $_SESSION["welcome"] = "Bienvenue" . $user["firstname"];
            header("Location : http://localhost/bibliophp/userinterface.php");
        } else {
            echo "<script> location.href='http://localhost/bibliophp/connection.php'</script>";
            $_SESSION["error"] = "Identifiant ou mot de passe incorrect";
        }
    }
}



?>