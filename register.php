<?php require_once("./inc/header.php") ?>

<form method="POST" action="./model/db_register.php" enctype="multipart/form-data">
    <div class="flex">
        <h1>Page D'Inscription</h1>
        <div class="infos">
            <select name="genre" id="genre-select">
                <option value="">--Sexe--</option>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>


            <input type="text" name="lastName" placeholder="Nom" required>
            <input type="text" name="firstName" placeholder="Prénom" required>
            <input type="email" name="email" placeholder="Votre email" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <input type="password" name="confirm" placeholder="Confirmez votre mot de passe" required>
            <input type="date" name="birthday" placeholder="Date de naissance" required>
            <input type="tel" name="phone" placeholder="n° telephone" required>

        </div>
        <label for="message">Message : </label>

        <textarea id="message" name="message" rows="5" cols="33">

        </textarea>
        <div class="pays">
            <label for="pays">Pays :</label>
            <select class="form-control" id="pays" name="country">
                <option value="france">France</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
                <option value="autre">Autre</option>
            </select>
        </div>
        <div class="buttons">
            <label for="conditions">accepter les conditions d'utilisations</label>
            <input type="checkbox" id="conditions" name="conditions">
            <button type="submit" name="inscription">valider</button>
            <button type="button"><a href="index.php">retour</a></button>
        </div>
    </div>
</form>

<?php require_once("./inc/footer.php"); ?>