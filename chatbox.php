<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/projet-flash-g6/assets/css/chatbox.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chatbox</title>
</head>
<body>





<input type="checkbox" id="click">
<label for="click">
  <img src="../../assets/img/rb_4104.png" width=auto height="100px">
</label>

<div class="page">
  <div class="head-text">
    Chatbox
  </div>

  <div class="chat-box">
    <div class="discussion">
      <div class="useronline">
        <span>noasman</span>
        <span>12/12/2024 23:05</span>
        <div class="message">
          <p>Coucou, ça fait longtemps. Comment ça va ? As-tu réussi le memory? </p>
        </div>

      </div>



      <div class="user">
        <p>12/12/2024 23:07</p>
        <div class="message" id="messuser">
          <p>Coucou, en effet, ça fait longtemps, je vais super et j'espère que pour toi aussi. Non le memory je galère honnetement</p>

        </div>
      </div>
    </div>








    <form action="#">

      <div class="field">
        <textarea rows="10" cols="10" placeholder="Message" required></textarea>
      </div>
      <div class="field">
        <button id="mess" type="submit">Envoyer</button>
      </div>
    </form>
  </div>


</body>
</html>
