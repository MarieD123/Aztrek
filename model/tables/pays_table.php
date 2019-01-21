<?php

function insertPays(string $libelle, $image) {
    global $connection;

    $query = "
INSERT INTO pays(libelle, image) VALUES (:libelle, :image)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
}

function updatePays(int $id, string $libelle, string $image){
    global $connection;

    $query = "
UPDATE pays SET libelle = :libelle, image = :image WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}



function getAllPays(int $limit = 999): array {
    global $connection;

    $query = "
    SELECT 
      pays.libelle AS pays,
      pays.image AS photo
    FROM pays
    LIMIT $limit
    ";

    $stmt = $connection->prepare($query);
    $stmt -> execute();

    return $stmt->fetchAll();
}

function getOnePays(int $id): array
{
    global $connection;

    $query = "SELECT pays.libelle FROM pays WHERE id = :id ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function getAllSejoursByPays(int $id): array {
    global $connection;

    $query = "
    SELECT 
        pays.*,
        sejour.*        
    FROM sejour
    LEFT JOIN pays on sejour.pays_id = pays.id
    WHERE pays_id = :id
    
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt -> execute();

    return $stmt->fetchAll();
}