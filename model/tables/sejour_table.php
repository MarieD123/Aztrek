<?php


function getAllSejours(int $limit = 999): array {
    global $connection;

    $query = "
    SELECT 
      sejour.*,
      pays.libelle AS libelle,
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






function insertSejour($titre, $pays_id, $image, $itineraire, $image_secondaire, $duree, $difficulte_id, $nb_places, $description_courte, $pts_forts) {
    global $connection;

    $query = "
    INSERT INTO sejour (titre, pays_id, image, itineraire, image_secondaire, duree, description_courte, difficulte_id, nb_places,pts_forts ) 
    VALUES (:titre, :pays_id, :image, :itineraire, :image_secondaire, :duree, :description_courte, :difficulte_id, :nb_places, :pts_forts )
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":itineraire", $itineraire);
    $stmt->bindParam(":image_secondaire", $image_secondaire);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":difficulte_id", $difficulte_id);
    $stmt->bindParam(":nb_places", $nb_places);
    $stmt->bindParam(":pts_forts", $pts_forts);
    $stmt->execute();
}


function UpdateSejour(int $id, $titre, $pays_id, $image, $itineraire, $image_secondaire, $duree, $difficulte_id, $nb_places, $description_courte, $pts_forts) {
    global $connection;

    $query = "
UPDATE Sejour SET titre = :titre, image = :image, description_courte = :description_courte, pts_forts = :pts_forts, itineraire =:itineraire, image_secondaire =:image_secondaire, duree =:duree, nb_places =:nb_places, pays_id =:pays_id, difficulte_id =:difficulte_id
WHERE id = :id
";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":itineraire", $itineraire);
    $stmt->bindParam(":image_secondaire", $image_secondaire);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":difficulte_id", $difficulte_id);
    $stmt->bindParam(":nb_places", $nb_places);
    $stmt->bindParam(":pts_forts", $pts_forts);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}
