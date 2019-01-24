<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$photo = getOneEntity("etape", $id);

$error = deleteEntity("etape", $id);

if ($error) {
    header('Location: index.php?errcode=' . $error->getCode());
    exit;
}

unlink("../../../uploads/" . $photo["image"]);

header('Location: index.php');
