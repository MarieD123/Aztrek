<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$libelle = $_POST['libelle'];

// Upload de l'image
$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename);



insertPays($libelle, $filename);

header('Location: index.php');
