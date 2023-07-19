# Projet de gestion de produits

Ce projet est une simple application web pour gérer une liste de produits. Il est construit en PHP et MySQL, et permet d'ajouter et de visualiser des produits dans une base de données.

## Contenu du projet

- `index.php`: Page principale de l'application, qui affiche la liste des produits dans la base de données.
- `db_connexion.php`: Fichier qui établit la connexion à la base de données MySQL.
- `insert_product.php`: Fichier qui gère l'ajout de nouveaux produits à la base de données.

## Installation et configuration

1. **Installer WAMP, XAMPP ou MAMP** : Ces outils installent PHP, MySQL et Apache sur votre machine.
   
2. **Créer une base de données MySQL** : Ouvrez phpMyAdmin dans votre navigateur , puis créez une nouvelle base de données nommée "produitsDb".

3. **Créer la table de produits** : Dans phpMyAdmin, sélectionnez la base de données "produitsDb", puis exécutez la requête SQL suivante pour créer la table de produits :

    ```sql
    CREATE TABLE produits (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nom VARCHAR(50),
        prix int,
        quantité INT
    );
    ```

4. **Configurer la connexion à la base de données** : Modifiez le fichier `db_connexion.php` pour qu'il utilise le nom d'utilisateur et le mot de passe de votre serveur MySQL.

5. **Démarrer l'application** : Placez le dossier du projet dans le dossier "www" (pour WAMP) ou "htdocs" (pour XAMPP et MAMP), puis ouvrez `http://localhost/nom_du_dossier` dans votre navigateur.

## Utilisation

- Pour ajouter un produit, remplissez le formulaire en haut de la page principale et cliquez sur "Ajouter un produit".
- Pour visualiser les produits, regardez simplement la liste sous le formulaire, la liste se mettra à jour à chaque entrée d'un nouveau produit.


