<?php

function getAllProjets($utilisateur_id) {
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

function getProjet($id) {
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

function insertProjet($nom_projet, $clients_id, $categorie_id) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "INSERT INTO projets (nom_projet, clients_id, categorie_id) VALUES (:nom_projet, :clients_id, categorie_id);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':nom_projet', $nom_projet);
    $stmt->bindParam(':clients_id', $clients_id);
    $stmt->bindParam(':categorie_id', $categorie_id);
    $stmt->execute();
}

function updateProjet($id, $nom) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "UPDATE projet
                SET nom = :nom
                WHERE id = :id
            ;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->execute();
}

function deleteProjet($id) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "DELETE FROM projets WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}