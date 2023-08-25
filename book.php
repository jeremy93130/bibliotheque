<?php require_once('../bibliophp/inc/header.php'); ?>

<form method="POST" action="./model/db_book.php">
    <div class="lion">

    </div>
    <div class="flex">
        <h1>Livres</h1>
        <input type="text" name="title" placeholder="Titre" required>
        <input type="text" name="author" placeholder="auteur" required>
        <input type="date" name="publication" placeholder="publication" required>
        <input type="number" name="stock" placeholder=<?php $stock; ?>>
        <div class="buttons">
            <button type="submit" name="ajouter">Ajouter</button>
            <button type="button"><a href="index.php">retour</a></button>
        </div>
    </div>
    </div>
</form>