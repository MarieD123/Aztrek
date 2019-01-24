<?php


function getAllEtapesBySejour(int $id): array {
    global $connection;

    $query = "
    SELECT 
        etape.*,
        sejour.id, sejour.titre AS titre       
    FROM etape
    LEFT JOIN sejour on etape.sejour_id = sejour.id
    WHERE sejour_id = :id
    
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt -> execute();

    return $stmt->fetchAll();
}

function getAllEtapes(int $limit = 999): array {
    global $connection;

    $query = "
    SELECT 
      etape.*, etape.titre AS titre_etape, etape.image AS image_etape, etape.id AS step_id,
      sejour.*, sejour.titre AS titre_sejour
    FROM etape
    INNER JOIN sejour on etape.sejour_id = sejour.id
    
    LIMIT $limit
    ";

    $stmt = $connection->prepare($query);
    $stmt -> execute();

    return $stmt->fetchAll();
}

function getOneEtape(int $id): array
{
    global $connection;

    $query = "SELECT etape.* FROM etape WHERE id = :id ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}


function insertEtape(string $sejour_id, int $num, string $titre, string $description, $image) {
    global $connection;

    $query = "
INSERT INTO etape(sejour_id, num, titre, description, image) VALUES (:sejour_id, :num, :titre, :description, :image)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->bindParam(":num", $num);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
}


function updateEtape(int $id, $sejour_id, $num, $titre, $description, $image){
    global $connection;

    $query = "
UPDATE etape SET sejour_id = :sejour_id, num = :num, titre = :titre, description = :description, image = :image 
WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->bindParam(":num", $num);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}