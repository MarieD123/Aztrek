<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$photo = getOneEtape($id);

$sejour_id = $_POST['sejour_id'];
$num = $_POST['num'];
$titre = $_POST['titre'];
$description = $_POST['description'];

if ($_FILES["image"]["error"] == 0) {
    $filename = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp, "../../../uploads/" . $filename);
} else {
    // Aucun fichier uploadé
    $filename = $photo["image"];
}

updateEtape($id, $sejour_id, $num, $titre, $description, $filename);

header('Location: index.php');


