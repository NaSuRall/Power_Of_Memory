<style>

    nav{
        display: flex;
        align-items: center;
        justify-content: space-around;
        height: 100px;
        width: 100%;
        color: #000000;
        background-color:white;
    }
    nav h2{
        font-size: 2em;
        font-family: "KashimaDemo";
        background-color:white;
    }
    nav .onglets{
        display: flex;
        justify-content: center;
        flex-direction: row;
        align-items: center;
        background-color:white;
    }

    nav .onglets a {
        margin-left: 35px;
        text-decoration: none;
        color: rgb(0, 0, 0);
        font-size: 20px;
        background-color:white;

    }
    .onglets span{
        border-bottom: 2px solid rgb(0, 0, 0);
        background-color:white;
    }

    .onglets a:hover, .hover {
        color: orange !important;
    }

    @media screen and (max-width: 768px) {
        header{
            height: 17vh;
        }
        nav{
            display: flex;
            flex-direction: column;
        }
        nav .onglets{
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 90%;
        }
        nav .onglets a{
            font-size: 15px;
            margin: 10px;
        }
        nav h2{
            font-size: 2.5em;
            padding-top: 10px;
        }
    }

    /* Pour les très petits écrans (écrans de moins de 480px de large) */
    @media screen and (max-width: 480px) {

        header{
            height: 80vh;
        }
        nav{
            display: flex;
            flex-direction: column;
        }
        nav .onglets{
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 90%;
        }
        nav .onglets a{
            font-size: 15px;
            margin: 10px;
        }
        nav h2{
            font-size: 2.5em;
            padding-top: 10px;
        }
    }

</style>


<?php
$_SESSION['userId'] = true;
?>

<?php
// Recupaire l'URL de la page courrente (obtenir le chemin relatif du fichier)
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav>
        <h2>The Power of Memory</h2>
        <div class="onglets">
            <a href="/projet-flash-g6/index.php"><span>Accueil</span></a>
            <a href="/projet-flash-g6/games/memory/memory.php">Jeu</a>
            <a href="/projet-flash-g6/games/memory/scores.php">Scores</a>
            <a href="/projet-flash-g6/contact.php">Nous contacter</a>

            <?php if (isset($_SESSION['userId']) == true): ?>
                <li><a href="../../projet-flash-g6/myAccount.php">My account</a></li>
            <?php else: ?>
                <li><a href="../login.php">Se connecter</a></li>
            <?php endif; ?>

        </div>
    </nav>

