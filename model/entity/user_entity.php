<?php

function getUser($id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                utilisateur.id,
                utilisateur.nom,
                utilisateur.prenom,
                utilisateur.adresse_mail
            FROM utilisateur
            WHERE utilisateur.id = :id
        ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch();
}

function getUserByEmailPassword($email, $password) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                utilisateur.id,
                utilisateur.nom,
                utilisateur.prenom,
                utilisateur.adresse_mail
            FROM utilisateur
            WHERE utilisateur.adresse_mail = :email
            AND utilisateur.mot_de_passe = MD5(:password)
        ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    return $stmt->fetch();
}

function insertUser($email, $password) {
    global $connection;

    $query = "INSERT INTO utilisateur (adresse_mail, mot_de_passe) VALUES (:adresse_mail, MD5(:mot_de_passe));";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':adresse_mail', $email);
    $stmt->bindParam(':mot_de_passe', $password);
    $stmt->execute();
}
