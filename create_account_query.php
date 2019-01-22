<?php
require_once "model/database.php";

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$date_naissance = empty($_POST["date_naissance"]) ? null : $_POST["date_naissance"];
$telephone = $_POST["telephone"];
$email = $_POST["email"];
$mot_de_passe = $_POST["mot_de_passe"];

$result = insertUtilisateur($nom, $prenom,$date_naissance,$telephone,$email,$mot_de_passe);

if ($result) {
    header("location: admin/");
} else{
    header("location: create_account.php");
}