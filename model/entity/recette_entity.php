<?php

function getLastRecettes() {
    global $connection;
    
    $query = "SELECT
            recette.id,
            recette.titre,
            recette.image,
            recette.date_creation,
            DATE_FORMAT(recette.date_creation, '%e %M %Y') AS date_creation_format,
            recette.description_courte,
            categorie.libelle AS 'categorie_libelle',
            utilisateur.nom AS 'utilisateur_nom',
            utilisateur.prenom AS 'utilisateur_prenom',
            CONCAT(utilisateur.prenom, ' ', LEFT(utilisateur.nom, 1), '.') AS pseudo,
            COUNT(jaime.utilisateur_id) AS 'nb_likes'
        FROM recette
        INNER JOIN categorie ON categorie.id = recette.categorie_id
        INNER JOIN utilisateur ON utilisateur.id = recette.utilisateur_id
        LEFT JOIN jaime ON jaime.recette_id = recette.id
        GROUP BY recette.id
        ORDER BY recette.date_creation DESC
        LIMIT 3;";

    $stmt = $connection->prepare($query);
    $stmt->execute();
    
    return $stmt->fetchAll();
}

function getAllRecettes() {
    global $connection;
    
    $query = "SELECT
                recette.id,
                recette.titre,
                recette.image,
                recette.date_creation,
                DATE_FORMAT(recette.date_creation, '%e %M %Y') AS date_creation_format,
                recette.description_courte,
                categorie.libelle AS 'categorie_libelle',
                utilisateur.nom AS 'utilisateur_nom',
                utilisateur.prenom AS 'utilisateur_prenom',
                CONCAT(utilisateur.prenom, ' ', LEFT(utilisateur.nom, 1), '.') AS pseudo,
                COUNT(jaime.utilisateur_id) AS 'nb_likes'
            FROM recette
            INNER JOIN categorie ON categorie.id = recette.categorie_id
            INNER JOIN utilisateur ON utilisateur.id = recette.utilisateur_id
            LEFT JOIN jaime ON jaime.recette_id = recette.id
            GROUP BY recette.id
            ORDER BY recette.date_creation DESC
            ;";

    $stmt = $connection->prepare($query);
    $stmt->execute();
    
    return $stmt->fetchAll();
}

function getRecette($id) {
    global $connection;
    
    $query = "SELECT
            recette.id,
            recette.titre,
            recette.image,
            recette.date_creation,
            DATE_FORMAT(recette.date_creation, '%e %M %Y') AS date_creation_format,
            recette.description,
            recette.description_courte,
            recette.categorie_id,
            categorie.libelle AS 'categorie_libelle',
            utilisateur.nom AS 'utilisateur_nom',
            utilisateur.prenom AS 'utilisateur_prenom',
            CONCAT(utilisateur.prenom, ' ', LEFT(utilisateur.nom, 1), '.') AS pseudo,
            COUNT(jaime.utilisateur_id) AS 'nb_likes'
        FROM recette
        INNER JOIN categorie ON categorie.id = recette.categorie_id
        INNER JOIN utilisateur ON utilisateur.id = recette.utilisateur_id
        LEFT JOIN jaime ON jaime.recette_id = recette.id
        WHERE recette.id = :recette_id
        GROUP BY recette.id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':recette_id', $id);
    $stmt->execute();
    
    return $stmt->fetch();
}

function insertRecette($titre, $image, $description_courte, $description, $utilisateur_id, $categorie_id) {
    global $connection;
    
    $query = "INSERT INTO recette (titre, image, description_courte, description, utilisateur_id, categorie_id, date_creation)
                VALUES (:titre, :image, :description_courte, :description, :utilisateur_id, :categorie_id, NOW())
        ";
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':titre', $titre);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':description_courte', $description_courte);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':utilisateur_id', $utilisateur_id);
    $stmt->bindParam(':categorie_id', $categorie_id);
    $stmt->execute();
}

function updateRecette($id, $titre, $image, $description_courte, $description, $categorie_id) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "UPDATE recette
                SET titre = :titre,
                    image = :image,
                    description_courte = :description_courte,
                    description = :description,
                    categorie_id = :categorie_id
                WHERE id = :id
            ;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':titre', $titre);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':description_courte', $description_courte);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':categorie_id', $categorie_id);
    $stmt->execute();
}

function deleteRecette($id) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "DELETE FROM recette WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}