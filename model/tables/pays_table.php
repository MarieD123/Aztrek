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