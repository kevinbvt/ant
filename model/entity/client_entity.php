<?php

function getAllClients($entreprise_id) {
    global $connection;
    
    $query = "SELECT
                clients.id,
                clients.nom,
                clients.adresse,
                clients.code_postal,
                clients.ville,
                clients.telephone,
                clients.entreprise_id
            FROM clients
            WHERE clients.entreprise_id = :entreprise_id
            ;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':entreprise_id', $entreprise_id);
    $stmt->execute();
    
    return $stmt->fetchAll();
}

function getClient($id) {
    global $connection;
    
    $query = "SELECT
                clients.id,
                clients.nom,
                clients.adresse,
                clients.code_postal,
                clients.ville,
                clients.telephone,
                clients.entreprise_id
            FROM clients
            WHERE clients.id = :id
            ;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    return $stmt->fetch();
}

function insertClient($nom, $adresse, $code_postal, $ville, $telephone, $entreprise_id) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "INSERT INTO clients (nom, adresse, code_postal, ville, telephone, entreprise_id)
              VALUES (:nom, :adresse, :code_postal, :ville, :telephone, :entreprise_id)
            ;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':adresse', $adresse);
    $stmt->bindParam(':code_postal', $code_postal);
    $stmt->bindParam(':ville', $ville);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':entreprise_id', $entreprise_id);
    $stmt->execute();
}

function updateClient($id, $nom, $adresse, $code_postal, $ville, $telephone) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "UPDATE clients
              SET id = :id,
                  nom = :nom,
                  adresse = :adresse,
                  code_postal = :code_postal,
                  ville = :ville,
                  telephone = :telephone
                WHERE id = :id
            ;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':adresse', $adresse);
    $stmt->bindParam(':code_postal', $code_postal);
    $stmt->bindParam(':ville', $ville);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->execute();
}

function deleteClient($id) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "DELETE FROM clients WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}