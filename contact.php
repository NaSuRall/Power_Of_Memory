
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    $pageTitle = 'contacter';
    include "./partials/head.php"?>

</head>


<body>
    <?php include "./partials/header.php"?>
  <header></header>
<div class="titre">
  <h1>Nous contacter</h1>
</div>


<section id="principal">
  <div class="info">
    <div class="mobile">
      <img  src="assets/img/tel.png" width=auto height="100">
      <br><br>
      <p>06 05 04 03 02</p>
    </div>

    <div class="support">
      <img src="assets/img/mail.png" width=auto height="100">
      <br><br>
      <p>support@powerofmemory.com</p>
    </div>

    <div class="loc">
      <img src="assets/img/localisation.png" width=auto height="100">
      <br><br>
      <p>Paris</p>
    </div>

  </div>


    <form action="traitement.php" method="post">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" placeholder="Nom" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email :" required>
        <label for="email">Subject</label>
        <input type="text" name="subject" id="subject" placeholder="Objet :" required>
        <label for="message">Message</label>
        <textarea name="message" id="message" placeholder="message..."5" rows="5"></textarea>
        <button>Envoyer</button>
    </form>




</section>


<div id="retour_haut_page">
  <a id="texte_haut_page" href="#" class="btn btn-default">Retour en haut ↑</a>
</div>






<?php include "./partials/footer.php"?>

</body>

</html>
