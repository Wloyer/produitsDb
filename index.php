<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Produits</title>
</head>
<body>
    <div class="centre">
        <h1>Ajouter un produit</h1>
    </div>
<!-- Formulaire pour ajouter un nouveau produit -->
    <div class="formulaire">
        <form action="insert_product.php" method="post">
            <label for="nom">Nom:</label><br>
            <input type="text" id="nom" name="nom"><br>
            <label for="prix">Prix:</label><br>
            <input type="number" id="prix" name="prix"  min="0"><br>
            <label for="quantité">Quantité:</label><br>
            <input type="number" id="quantité" name="quantité" min="0"><br>
            <input type="submit" value="Ajouter un produit">
        </form>
    </div>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .centre{
            display: flex;
           justify-content: center;
        }
        .formulaire{
           display: flex;
           justify-content: center;
           margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin:auto;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color:orangered;
            color: white;
        }
        tr:nth-child(even) {
            background-color: wheat;
        }
    </style>
<?php 
    include 'db_connexion.php'; 

    $sql = "SELECT id, nom, prix, quantité FROM produits"; // Déclaration de la requête SQL à exécuter
    $result = $conn->query($sql); // Exécution de la requête SQL et stockage du résultat

    if ($result->num_rows > 0) { // Vérification si la requête a retourné des résultats
        // Création d'une table HTML avec des en-têtes pour afficher les données des produits
        echo "<table><tr><th>ID</th><th>Nom</th><th>Prix</th><th>Quantité</th></tr>";
        // Parcours des lignes de résultats
        while($row = $result->fetch_assoc()) { 
            // Affichage des données de chaque ligne dans une nouvelle ligne du tableau
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nom"]. "</td><td>" . $row["prix"]. "</td><td>" . $row["quantité"]. "</td></tr>";
        }
        echo "</table>"; // Fermeture de la balise 'table'
    } else {
        echo "0 résultats"; // Affiche 0 résultat si aucun produit n'est trouvé
    }
    $conn->close(); // Fermeture de la connexion à la base de données
    ?>
</body>
</html>