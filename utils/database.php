<?php
function connectToDbAndGetPdo() {
    $db_host = '127.0.0.1';
    $db_user = 'root';
    $db_password = 'root';
    $db_db = 'Manga_of_memory';
    $db_port = "8889";

    try {
        $db = new PDO("mysql:host=$db_host;port=$db_port;dbname=$db_db", $db_user, $db_password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}

function validateEmail($email, $db) {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Erreur : L'adresse mail est invalide");
  }

  $stmt = $db->prepare("SELECT COUNT(*) FROM users WHERE mail = :mail");
  $stmt->execute(['mail' => $email]);
  if ($stmt->fetchColumn() > 0) {
    die("Erreur : Ce mail est déjà utilisé");
  }
}

function validatePseudo($pseudo, $db) {
  if (strlen($pseudo) < 4) {
    die('Erreur: Le pseudo doit faire une longueur de 4 caractères');
  }

  $stmt = $db->prepare("SELECT COUNT(*) FROM users WHERE pseudo = :pseudo");
  $stmt->execute(['pseudo' => $pseudo]);
  if ($stmt->fetchColumn() > 0) {
    die("Erreur : Ce pseudo est déjà utilisé");
  }
}

function validatePassword($mot_de_pass, $conf_mdp) {
  if ($mot_de_pass !== $conf_mdp) {
    die("Erreur : Les mots de passe sont différents");
  }

  if (strlen($mot_de_pass) < 8 ||
    !preg_match('/[A-Z]/', $mot_de_pass) ||
    !preg_match('/[0-9]/', $mot_de_pass) ||
    !preg_match('/[\W]/', $mot_de_pass)) {
    die("Erreur : Le mot de passe doit faire au moins 8 caractères, contenir au moins une majuscule, un chiffre et un caractère spécial");
  }
}

function registerUser($email, $mot_de_pass, $pseudo, $db) {
  $dateTime = date("Y-m-d H:i:s");
  $hashed_password = password_hash($mot_de_pass, PASSWORD_BCRYPT);

  $requete = $db->prepare("INSERT INTO users (id, mail, mot_de_passe, pseudo, time_registration) VALUES (null, :mail, :mot_de_pass, :pseudo, :time_registration)");
  $requete->execute([
    "mail" => $email,
    "mot_de_pass" => $hashed_password,
    "pseudo" => $pseudo,
    "time_registration" => $dateTime
  ]);

  echo "Vous êtes inscrit avec succès";
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ok"])) {
  $db = connectToDbAndGetPdo();

  $email = $_POST["email"];
  $mot_de_pass = $_POST["mot_de_pass"];
  $pseudo = $_POST["pseudo"];
  $conf_mdp = $_POST["conf_mdp"];

  validateEmail($email, $db);
  validatePseudo($pseudo, $db);
  validatePassword($mot_de_pass, $conf_mdp);
  registerUser($email, $mot_de_pass, $pseudo, $db);
}

