<?php 
include 'db_connexion.php'; 

// Récupération des valeurs du formulaire à partir du tableau superglobal $_POST
$nom = $_POST['nom']; // Récupération de la valeur du champ 'nom'
$prix = $_POST['prix']; // Récupération de la valeur du champ 'prix'
$quantité = $_POST['quantité']; // Récupération de la valeur du champ 'quantité'

// Création de la requête SQL pour insérer le nouveau produit dans la base de données
// Les variables $nom, $prix et $quantité sont injectées directement dans la requête
$sql = "INSERT INTO produits (nom, prix, quantité) VALUES ('$nom', $prix, $quantité)";

// Exécution de la requête SQL
$result = $conn->query($sql);

// Redirection du navigateur vers 'index.php'
// Cela permet d'éviter de soumettre le formulaire plusieurs fois si l'utilisateur actualise la page
header('Location: index.php');
?>
