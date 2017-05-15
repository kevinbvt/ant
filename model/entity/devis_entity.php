<?php

function getAllDevisByProjet($id) {
    global $connection;

    $query = "SELECT
                devis.id,
                devis.reference,
                devis.date_creation,
                devis.valide,
                CASE devis.valide WHEN 0 THEN 'Non valide' ELSE 'Valide' END AS is_valide
            FROM devis
            WHERE devis.projets_id = :id
            ORDER BY devis.date_creation DESC
            ;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertDevis($reference, $projet_id) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO devis (reference, date_creation, valide, projets_id) VALUES (:reference, NOW(), 0, :projet_id);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':reference', $reference);
    $stmt->bindParam(':projet_id', $projet_id);
    $stmt->execute();
}
