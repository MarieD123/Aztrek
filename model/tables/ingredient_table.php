<?php


function getAllIngredientsByRecette(int $id): array {
    global $connection;

    $query = "
    SELECT 
        ingredient.*, 
        rhi.qte, 
        unite.libelle AS unite
    FROM ingredient
    INNER JOIN recette_has_ingredient rhi on ingredient.id = rhi.ingredient_id
    LEFT JOIN unite on rhi.unite_id = unite.id
    WHERE rhi.recette_id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt -> execute();

    return $stmt->fetchAll();
}





