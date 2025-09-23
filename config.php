<?php
$host = "localhost";
$user = "ton_utilisateur";   // ← à changer
$pass = "ton_mot_de_passe"; // ← à changer
$db   = "elearning";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
?>
