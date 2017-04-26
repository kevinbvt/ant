<?php

function getAllCategories($utilisateur_id) {
    global $connection;
    
    $query = "SELECT
                categorie.id,
                categorie.nom
            FROM categorie
            WHERE categorie.utilisateur_id = :utilisateur_id
            ;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':utilisateur_id', $utilisateur_id);
    $stmt->execute();
    
    return $stmt->fetchAll();
}

function getCategorie($id) {
    global $connection;
    
    $query = "SELECT
                categorie.id,
                categorie.nom
            FROM categorie
            WHERE categorie.id = :id
            ;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    return $stmt->fetch();
}

function insertCategorie($utilisateur_id, $nom) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "INSERT INTO categorie (nom, utilisateur_id) VALUES (:nom, :utilisateur_id);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':utilisateur_id', $utilisateur_id);
    $stmt->execute();
}

function updateCategorie($id, $nom) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "UPDATE categorie
                SET nom = :nom
                WHERE id = :id
            ;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->execute();
}

function deleteCategorie($id) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "DELETE FROM categorie WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}