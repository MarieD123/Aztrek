<?php


function getAllSejours(int $limit = 999): array {
    global $connection;

    $query = "
    SELECT 
      sejour.*,
      DATE_FORMAT(depart.date_depart, '%d-%m-%Y') AS date_depart_format,
      pays.libelle AS pays,
      COUNT(utilisateur_has_depart.nb_participants) AS nb_participants
    FROM sejour
    INNER JOIN pays ON sejour.pays_id = pays.id
    INNER JOIN difficulte on sejour.difficulte_id = difficulte.id
    INNER JOIN depart on sejour.id = d.sejour_id
    LEFT JOIN utilisateur_has_depart on depart.id = utilisateur_has_depart.depart_id
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
      DATE_FORMAT(depart.date_depart, '%d-%m-%Y') AS date_depart_format,
      pays.libelle AS pays,
      COUNT(utilisateur_has_depart.nb_participants) AS nb_participants
    FROM sejour
    INNER JOIN pays ON sejour.pays_id = pays.id
    INNER JOIN difficulte on sejour.difficulte_id = difficulte.id
    INNER JOIN depart on sejour.id = d.sejour_id
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