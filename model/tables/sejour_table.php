<?php


function getAllSejours(int $limit = 999): array {
    global $connection;

    $query = "
    SELECT 
      sejour.*,
      pays.libelle AS pays,
      difficulte.libelle AS difficulte
    FROM sejour
    INNER JOIN pays ON sejour.pays_id = pays.id
    INNER JOIN difficulte on sejour.difficulte_id = difficulte.id
    GROUP BY sejour.id
    LIMIT $limit
    ";

    $stmt = $connection->prepare($query);
    $stmt -> execute();

    return $stmt->fetchAll();
}



function getOneSejour(int $id): array{
    global $connection;

    $query = "
    SELECT 
      sejour.*,
      pays.libelle AS pays,
      difficulte.libelle AS difficulte
    FROM sejour
    INNER JOIN pays ON sejour.pays_id = pays.id
    INNER JOIN difficulte on sejour.difficulte_id = difficulte.id
    LEFT JOIN depart on sejour.id = depart.sejour_id
    LEFT JOIN utilisateur_has_depart on depart.id = utilisateur_has_depart.depart_id
    WHERE sejour.id = :id
    GROUP BY sejour.id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt -> execute();

    return $stmt->fetch();
}


function insertSejour(string $titre, int $categorie_id, string $image, string $description, string $description_courte, int $couverts, string $temps_prepa, string $temps_cuisson, int $publie, int $utilisateur_id) {
    global $connection;

    $query = "
    INSERT INTO recette (titre, image, description, description_courte, couverts, temps_prepa, temps_cuisson, publie, date_creation, utilisateur_id, categorie_id) 
    VALUES (:titre, :image, :description, :description_courte, :couverts, :temps_prepa, :temps_cuisson, :publie, NOW(), :utilisateur_id, :categorie_id)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":couverts", $couverts);
    $stmt->bindParam(":temps_prepa", $temps_prepa);
    $stmt->bindParam(":temps_cuisson", $temps_cuisson);
    $stmt->bindParam(":publie", $publie);
    $stmt->bindParam(":categorie_id", $categorie_id);
    $stmt->bindParam(":utilisateur_id", $utilisateur_id);
    $stmt->execute();
}

function getBetterPrice(int $id){
    global $connection;

    $query="
      SELECT depart.*,
             sejour.*
      FROM depart
      INNER JOIN sejour on depart.sejour_id = sejour.id
      WHERE sejour_id = :id
      ORDER BY prix
      LIMIT 1
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt -> execute();

    return $stmt->fetch();
}


function getAllDepartsBySejour(int $id): array {
    global $connection;

    $query = "
    SELECT 
        depart.*,
          DATE_FORMAT(depart.date_depart, '%d-%m-%Y') AS date_depart_format,
        sejour.*,
           DATE_FORMAT(ADDDATE(depart.date_depart, sejour.duree), '%d-%m-%Y') AS date_retour_format
    FROM depart
    LEFT JOIN sejour on depart.sejour_id = sejour.id
    INNER JOIN utilisateur_has_depart uhd on depart.id = uhd.depart_id
    WHERE sejour_id = :id
    
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt -> execute();

    return $stmt->fetchAll();
}

function getAllEtapesBySejour(int $id): array {
    global $connection;

    $query = "
    SELECT 
        etape.*,
        sejour.id        
    FROM etape
    LEFT JOIN sejour on etape.sejour_id = sejour.id
    WHERE sejour_id = :id
    
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt -> execute();

    return $stmt->fetchAll();
}

function getParticipantsByDepart(int $id): array {
    global $connection;

    $query = "

    SELECT 
        depart.*,
          DATE_FORMAT(depart.date_depart, '%d-%m-%Y') AS date_depart_format,
        sejour.*,
           DATE_FORMAT(ADDDATE(depart.date_depart, sejour.duree), '%d-%m-%Y') AS date_retour_format,
           SUM(sejour.nb_places - uhd.nb_participants) AS places_dispo
    FROM depart
    LEFT JOIN sejour on depart.sejour_id = sejour.id
    LEFT JOIN utilisateur_has_depart uhd on depart.id = uhd.depart_id
    WHERE sejour_id = :id AND depart.id = uhd.depart_id
    
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt -> execute();

    return $stmt->fetchAll();
}

