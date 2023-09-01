<?php
session_start();
require_once("./inc/header.php");

if (isset($_SESSION["id"])) {
    header("Location: http://localhost/bibliotheque/connection.php");
} else { ?>

    <body>
        <?php include_once("./inc/nav.php") ?>
    </body>

<?php } ?>

<?php
require_once("./inc/footer.php");
?>