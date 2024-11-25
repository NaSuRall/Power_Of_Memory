<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    $pageTitle = 'Inscription';
    include "./partials/head.php"?>


</head>
<body>


<?php include "./partials/header.php"?>

<header></header>
<div class="titre">
  <h1>Inscription</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, autem blanditiis cumque </p>
</div>

<section>
  <div class="corps-formulaire">
    <form method="POST" action="./utils/database.php">
        <div class="groupe">
          <input type="email" name="email" placeholder="test@test.fr" required>
          <input type="text" name="pseudo" placeholder="PseudoTest85" required>
          <input type="password" name="mot_de_pass" placeholder="Mot de passe" required>
          <input type="password" name="conf_mdp" placeholder="Confirmer votre mot de passe" required>
            <input type="submit" name="ok" placeholder="S'inscrire">
          <a href="login.php">Deja inscrit ?</a>
        </div>
     </form>
    </div>
</section>

<div id="retour_haut_page">
  <a id="texte_haut_page" href="#" class="btn btn-default">Retour en haut ↑</a>
</div>


<?php include "./partials/footer.php"?>


</body>
</html>
