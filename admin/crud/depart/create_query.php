<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$date_depart = $_POST['date_depart'];
$prix = $_POST['prix'];
$sejour_id = $_POST['sejour_id'];

insertDepart($date_depart, $prix, $sejour_id);

header('Location: index.php');
