<?php


function getAllDeparts(int $limit = 999): array {
    global $connection;

    $query = "
    SELECT 
      depart.*,
      DATE_FORMAT(depart.date_depart, '%d-%m-%Y') AS date_depart_format,     
      sejour.id, depart.id as dep_id,
      sejour.titre AS titre_sejour,
      uhd.*
    FROM depart
    INNER JOIN sejour on depart.sejour_id = sejour.id
    LEFT JOIN utilisateur_has_depart uhd on depart.id = uhd.depart_id
    LIMIT $limit
    ";

    $stmt = $connection->prepare($query);
    $stmt -> execute();

    return $stmt->fetchAll();
}



function getAllDepartsBySejour(int $id): array {
    global $connection;

    $query = "
    SELECT 
        depart.*,
          DATE_FORMAT(depart.date_depart, '%d-%m-%Y') AS date_depart_format,
        sejour.*,
           DATE_FORMAT(ADDDATE(depart.date_depart, sejour.duree), '%d-%m-%Y') AS date_retour_format,
           sejour.nb_places - SUM(uhd.nb_participants) AS places_dispo
    FROM depart
    LEFT JOIN sejour on depart.sejour_id = sejour.id
    INNER JOIN utilisateur_has_depart uhd on depart.id = uhd.depart_id
    WHERE sejour_id = :id
    GROUP BY depart.id
    
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt -> execute();

    return $stmt->fetchAll();
}



function getAllInscritsByDepart(int $id): array {
    global $connection;

    $query = "
    SELECT 
        utilisateur_has_depart.*,
        depart.id        
    FROM utilisateur_has_depart
    LEFT JOIN depart on utilisateur_has_depart.depart_id = depart.id
    WHERE depart_id = :id
    
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt -> execute();

    return $stmt->fetchAll();
}



function insertDepart(string $date_depart, float $prix, int $sejour_id) {
    global $connection;

    $query = "
INSERT INTO depart(date_depart, prix, sejour_id) VALUES (:date_depart, :prix, :sejour_id)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":date_depart", $date_depart);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->execute();
}

function updateDepart(int $id, string $date_depart, $prix, $sejour_id){
    global $connection;

    $query = "UPDATE depart SET date_depart = :date_depart, prix = :prix, sejour_id = :sejour_id WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":date_depart", $date_depart);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}


