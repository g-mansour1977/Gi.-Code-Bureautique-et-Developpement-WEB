<?php
$host = "localhost"; // ou fourni par 000WebHost
$db = "elearning";
$user = "ton_utilisateur";
$pass = "ton_mot_de_passe";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Erreur: " . $conn->connect_error);
echo "Connexion réussie !";
?>
