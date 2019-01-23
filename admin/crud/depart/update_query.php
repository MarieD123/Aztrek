<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];

$date_depart = $_POST['date_depart'];
$prix = $_POST['prix'];
$sejour_id = $_POST['sejour_id'];

UpdateDepart($id, $date_depart, $prix, $sejour_id);

header('Location: index.php');
