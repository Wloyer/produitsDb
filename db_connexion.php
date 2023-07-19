<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "produitsDb";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
  die("La connexion a échoué : " . $conn->connect_error);
}
?>
