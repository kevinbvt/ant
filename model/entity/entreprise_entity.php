<?php

function getEntreprise($id) {
    global $connection;
    
    $query = "SELECT
                entreprise.id,
                entreprise.ville,
                entreprise.code_postal,
                entreprise.adresse,
                entreprise.date_creation,
                entreprise.telephone,
                entreprise.siret,
                entreprise.bic,
                entreprise.iban
            FROM entreprise
            WHERE entreprise.id = :id
            ;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    return $stmt->fetch();
}

function insertEntreprise($id) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "INSERT INTO entreprise (id) VALUES (:id);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

function updateEntreprise($id, $ville, $code_postal, $adresse, $date_creation, $telephone, $siret, $bic, $iban) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "UPDATE entreprise
                SET ville = :ville,
                    code_postal = :code_postal,
                    adresse = :adresse,
                    date_creation = :date_creation,
                    telephone = :telephone,
                    siret = :siret,
                    bic = :bic,
                    iban = :iban
                WHERE id = :id
            ;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':ville', $ville);
    $stmt->bindParam(':code_postal', $code_postal);
    $stmt->bindParam(':adresse', $adresse);
    $stmt->bindParam(':date_creation', $date_creation);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':siret', $siret);
    $stmt->bindParam(':bic', $bic);
    $stmt->bindParam(':iban', $iban);
    $stmt->execute();
}