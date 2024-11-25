<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    $pageTitle = 'compte';
    include "./partials/head.php"?>

</head>

<form method="post" action="./utils/userConnexion.php">
<input type="submit" name="ok" placeholder="destroy" >
</form>

<?php include "./partials/header.php"?>

<header></header>

<div class="titre">
    <h1>Mon Espace</h1>
</div>

<section id="modif_email">

    <form method="post" action="page_espace.php"></form>
    <h2 class="titre_modif">Modifier votre adresse mail</h2>
    <div id="champ_modif_email">
        <input class="bouton_modif" type="email" name="old_email" placeholder="Ancienne adresse email"/>
        <input class="bouton_modif" type="email" name="new_email" placeholder="Nouvelle adresse email"/>
        <input class="bouton_modif" type="password" name="mot_de_passe" placeholder="Mot de passe"/>
        <input id="validation_modif" class="bouton_connection" type="submit" value="Valider"/>
    </div>
</section>

<div id="modif_mdp">
    <form method="post" action="page espace.php"></form>
    <h2 class="titre_modif" >Modifier votre mot de passe</h2>
    <div id="champ_modif_mdp">
        <input class="bouton_modif" type="password" name="old_mdp" placeholder="Ancien mot de passe"/>
        <input class="bouton_modif" type="password" name="new_mdp" placeholder="Nouveau mot de passe"/>
        <input class="bouton_modif" type="password" name="confirm_mdp" placeholder="Confirmer mot de passe"/>
        <input id="validation_modif_mdp" class="bouton_connection" type="submit" value="Valider"/>
    </div>
</div>


<div id="retour_haut_page">
    <a id="texte_haut_page" href="#" class="btn btn-default">Retour en haut ↑</a>
</div>

<footer>
    <div class="row">
        <div class="column">
            <div class="col">
                <h3>Information</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <br>
                <br>
                <p><span>Tel :</span> 06 40 53 58 27</p>
                <p><span>Email :</span>test@test.fr</p>
                <p><span>Location :</span> Paris</p>

                <div class="contact">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
                <h4>Copiright 2022 Tous droit réservés</h4>
            </div>
        </div>

        <div class="column">
            <h3>Power of Memory</h3>
            <div class="list">
                <ul>
                    <li><a href="">Jouer !</a></li>
                    <li><a href="">Les Scores</a></li>
                    <li><a href="">Nous contacter</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


</body>
</html>
