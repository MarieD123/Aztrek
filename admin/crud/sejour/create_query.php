<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$titre = $_POST['titre'];
$pays_id = $_POST['pays_id'];
$duree = $_POST['duree'];
$difficulte_id = $_POST['difficulte_id'];
$nb_places = $_POST['places'];
$description_courte = $_POST['description_courte'];
$pts_forts = $_POST['pts_forts'];


// Upload de l'image principale
$filename_1 = $_FILES["image"]["name"];
$tmp_1 = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename_1);

// Upload de l'image de l'itineraire
$filename_2 = $_FILES["itineraire"]["name"];
$tmp_2 = $_FILES["itineraire"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename_2);

// Upload de l'image secondaire
$filename_3 = $_FILES["image_secondaire"]["name"];
$tmp_3 = $_FILES["image_secondaire"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename_3);



insertSejour($titre, $pays_id, $filename_1, $filename_2, $filename_3, $duree, $difficulte_id, $nb_places, $description_courte, $pts_forts);

header('Location: index.php');