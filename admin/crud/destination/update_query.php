<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$libelle = $_POST['libelle'];

$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename);

updatePays($id, $libelle, $filename);

header('Location: index.php');
