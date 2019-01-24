<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$sejour_id = $_POST['sejour_id'];
$num = $_POST['num'];
$titre = $_POST['titre'];
$description = $_POST['description'];

// Upload de l'image
$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename);



insertEtape($sejour_id, $num, $titre, $description, $filename);

header('Location: index.php');
