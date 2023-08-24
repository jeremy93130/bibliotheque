<?php require_once("./inc/function.php");
require_once("./inc/header.php"); ?>

<form method="POST" action="formu.php" enctype="multipart/form-data">
    <div class="lion">

    </div>
    <div class="flex">
        <h1>Page D'Inscription</h1>
        
        <select name="pets" id="pet-select">
            <option value="">--Sexe--</option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
        </select>

        <input type="email" name="email" placeholder="Votre email" required>
        <input type="text" name="pseudo" placeholder="Votre pseudo" required>
        <input type="password" name="mdp" placeholder="Mot de passe" required>
        <input type="password" name="confirmMdp" placeholder="Confirmation du mot de passe" required>
        <input type="file" name="image">
        <div class="buttons">
            <button type="button" name="connexion"><a href="connexion.php">Connexion</a></button>
            <button type="submit" name="inscription">valider</button>
            <button type="button"><a href="index.php">retour</a></button>
        </div>
    </div>
</form>

<?php require_once("./inc/footer.php"); ?>