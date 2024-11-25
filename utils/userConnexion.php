<?php
session_start(); // Démarrer la session

include "../partials/header.php";
include "../utils/database.php";

$db = connectToDbAndGetPdo();

function loginUser($email, $mot_de_passe) {
    $db = connectToDbAndGetPdo();

    // Préparer la requête pour récupérer l'utilisateur
    $stmt = $db->prepare("SELECT id, mot_de_passe FROM users WHERE mail = :mail");
    $stmt->execute(['mail' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifier si l'utilisateur existe et que le mot de passe est correct
    if ($user && password_verify($mot_de_passe, $user['mot_de_passe'])) {
        // Stocker l'ID utilisateur dans une variable de session
        $_SESSION['userId'] = $user['id'];


        echo "Connexion réussie, vous êtes maintenant connecté";
        header("Location: ../index.php");
    } else {
        echo "Erreur : Identifiants incorrects";
    }
}


if (isset($_POST['ok'])) {
    session_destroy();
    $_SESSION["userId"] = false;
    header('Location: ../index.php');
}


// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];
    loginUser($email, $mot_de_passe);
}


