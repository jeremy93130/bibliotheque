<?php session_start();
if (!isset($_SESSION["id"])) {
    header("Location: http://localhost/bibliophp/connection.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include_once("./inc/nav.php"); ?>
</body>

</html>