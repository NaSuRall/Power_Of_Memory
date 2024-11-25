<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    $pageTitle = 'Connexion';
    include "./partials/head.php"?>
</head>
<body>

<?php include "./partials/header.php"?>

<header>
</header>
<div class="titre">
  <h1>Connexion</h1>
</div>

<section>

  <form method="post" action="./utils/userConnexion.php">
  <h2 id="titre_connexion">Veuillez entrer vos informations</h2>
  <div id="champ_connexion">
    <input class="bouton_connection" type="email" name="email" placeholder="Adresse email" required/>
    <input class="bouton_connection" type="password" name="mot_de_passe" placeholder="Mot de Passe" required/>
    <input id="validation_connexion" class="bouton_connection" type="submit" name="submit" value="Connexion" required/>
    <a href="Inscription.php">S'inscrire</a>
    <a href="#demo">Mot de passe oublié</a>
  </div>
  </form>

    <div id="demo" class="modal">
      <div class="modal_content">
        <div class="titleheader">
          <h3>Mot de passe oublié</h3>
        </div>


        <p>Veuillez saisir votre email de connnexion afin de recevoir le lien de réintialisation de votre mot de passe.</p>
        <input class="boutonemail" type="email" placeholder="Email" required/>
        <input class="boutonconfirmer" type="submit" value="Confirmer"/>

        <a href="#" class="modal_close">x</a>
      </div>
    </div>



  </div>


</section>

<div id="retour_haut_page">
  <a id="texte_haut_page" href="#" class="btn btn-default">Retour en haut ↑</a>
</div>


<?php include "./partials/footer.php"?>


</body>
</html>
