<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$sejour = getOneSejour($id);

$titre = $_POST['titre'];
$pays_id = $_POST['pays_id'];
$duree = $_POST['duree'];
$difficulte_id = $_POST['difficulte_id'];
$nb_places = $_POST['places'];
$description_courte = $_POST['description_courte'];
$pts_forts = $_POST['pts_forts'];


// Upload de l'image principale
if ($_FILES["image"]["error"] == 0) {
    $filename= $_FILES["image"]["name"];
    $tmp_1 = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp_1, "../../../uploads/" . $filenam);
} else {
    // Aucun fichier uploadé
    $filename = $sejour["image"];
}

// Upload de l'image de l'itineraire
if ($_FILES["itineraire"]["error"] == 0) {
$filename_itineraire = $_FILES["itineraire"]["name"];
$tmp_2 = $_FILES["itineraire"]["tmp_name"];
move_uploaded_file($tmp_2, "../../../uploads/" . $filename_itineraire);
} else {
    // Aucun fichier uploadé
    $filename_itineraire = $sejour["itineraire"];
}

// Upload de l'image secondaire
    if ($_FILES["image_secondaire"]["error"] == 0) {
$filename_secondaire = $_FILES["image_secondaire"]["name"];
$tmp_3 = $_FILES["image_secondaire"]["tmp_name"];
move_uploaded_file($tmp_3, "../../../uploads/" . $filename_secondaire);
    } else {
        // Aucun fichier uploadé
        $filename_secondaire = $sejour["image_secondaire"];
    }


updateSejour($id, $titre, $pays_id, $filename, $filename_itineraire, $filename_secondaire, $duree, $difficulte_id, $nb_places, $description_courte, $pts_forts);

header('Location: index.php');
