<style>

  footer{
    height: 100%;
    background-color: #191b34;
    display: flex;
    color: white;

  }
  .col{
    display: flex;
    width: 50%;
    flex-direction: column;
  }
  footer .row{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
  }

  .column {
    display: flex;
    flex-direction: column;
    align-items: center;
    flex: 50%;
  }
  .col h3{
    font-size: 1.5em;
    padding: 10px  10px ;
  }
  .column h3{
    font-size: 1.5em;
    padding: 10px  10px ;
  }
  .list ul li{
    padding-top: 10px;

  }
  ul li::marker {
    color:#acacff;
  }
  .list ul li a{
    color: #ffffff;
    text-decoration: none;

  }
  .col p span{
    color: #5e5eff;
  }

  @media screen and (max-width: 1024px) {
      footer{
          height: 100%;
          display: flex;
      }

      .col{
          width: 80%;
      }

  }


  @media screen and (max-width: 768px) {
      footer{
          height: 100%;
          display: flex;
      }
      .row{
          display: grid;
          flex-direction: column-reverse;
      }
      .col{
          width: 80%;
      }
      .column{
          flex-direction: column;

      }

  }


  @media screen and (max-width: 480px) {
      footer{
          height: 100%;
          display: flex;
      }
      .row{
          display: grid;
          flex-direction: column-reverse;
      }
      .col{
          width: 80%;
      }
      .column{
          flex-direction: column;
      }
  }
</style>
<footer>
  <div class="row">
    <div class="column">
      <div class="col">
        <h3>Information</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <br><br>
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
          <li><a href="games/memory/scores.php">Les Scores</a></li>
          <li><a href="contact.html">Nous contacter</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
