<?php
session_start();
require_once("../inc/function.php");


if (isset($_POST["inscription"])) {
    $civility = htmlspecialchars($_POST["genre"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $firstName = htmlspecialchars($_POST["firstName"]);
    $email = htmlspecialchars($_POST["email"]);
    $country = htmlspecialchars($_POST["country"]);
    $password = htmlspecialchars($_POST["password"]);
    $confirm = htmlspecialchars($_POST["confirm"]);
    $birthday = htmlspecialchars($_POST["birthday"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);



    if (empty($civility) || empty($lastName) || empty($firstName) || empty($email) || empty($country) || empty($password) || empty($confirm) || empty($birthday) || empty($phone) || empty($message)) {
        echo "<p> Merci de remplir tous les champs demandés </p>";
    } else {
        if (isset($_POST["conditions"])) {
            $conditions = $_POST["conditions"];
            echo "<p> Félicitation vous êtes bien inscrits </p>";
            header("refresh:2; http://localhost/biblioPHP/book.php");
        } else {
            $_SESSION["errorConditions"] = "Conditions obligatoires !";

            header("Location: http://localhost/bibliophp/register.php");
        }
    }
}



// mdp cryptage

$mdpCryptage = password_hash($password, PASSWORD_DEFAULT);

$connexionDB = dBConnexion();

// Préparation requête : 
$request = $connexionDB->prepare("INSERT INTO user (civility,firstname,lastname,email,password,country,phone,birthday,message) VALUES (?,?,?,?,?,?,?,?,?)");

try {
    $request->execute(array($civility, $firstName, $lastName, $email, $mdpCryptage, $country, $phone, $birthday, $message));
} catch (PDOException $error) {
    echo $error->getMessage();
}
?>