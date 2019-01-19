<?php
//////////////////////////// code non utilisé pour le moment ///////////////////////

function insertCategorie(string $libelle) {
    global $connection;

    $query = "INSERT INTO categorie(libelle) VALUES (:libelle)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->execute();
}

function updateCategorie(int $id, string $libelle){
    global $connection;

    $query = "UPDATE categorie SET libelle = :libelle WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}
///////////////////////////////////////////////////


function getAllPays(): array {
    global $connection;

    $query = "
    SELECT 
      pays.libelle AS pays
    FROM pays
    ";

    $stmt = $connection->prepare($query);
    $stmt -> execute();

    return $stmt->fetchAll();
}