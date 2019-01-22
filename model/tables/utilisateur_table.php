<?php

function getUtilisateurByEmailMotDePasse(string $email, string $password) {
    global $connection;

    $query = "
    SELECT *
    FROM utilisateur
    WHERE email = :email
    AND mot_de_passe = SHA1(:password)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt -> execute();

    return $stmt->fetch();
}

function pseudo(){
    global $connection;
    $query="SELECT CONCAT(utilisateur.prenom, ' ', LEFT(utilisateur.nom, 1),'.') AS pseudo FROM utilisateur ";
    $stmt = $connection->prepare($query);
    $stmt -> execute();

    return $stmt->fetch();
}


function insertUtilisateur(string $nom, string $prenom, $date_naissance, string $telephone, string $email, string $mot_de_passe) {
    global $connection;

    $query="
    INSERT INTO utilisateur(nom, prenom, date_naissance, telephone, email, mot_de_passe)
    VALUES (:nom, :prenom, :date_naissance, :telephone, :email, SHA1(:mot_de_passe))
";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":date_naissance", $date_naissance);
    $stmt->bindParam(":telephone", $telephone);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":mot_de_passe", $mot_de_passe);

    return $stmt -> execute();
}