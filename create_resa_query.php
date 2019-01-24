<?php
require_once 'config/parameters.php';
require_once 'model/database.php';

$user = getCurrentUser();

$user['id'] = $utilisateur_id;
$depart_id = $_POST['depart_id'];
$resas = $_POST['resas'];

insertParticipant($utilisateur_id, $depart_id, $resas);

header('Location: index.php');