<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?= $description; ?>">
    <title>Aztrek | <?= $title; ?></title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:300,400,600" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/main.css">

    <?php foreach ($stylesheets as $stylesheet) : ?>
        <link rel="stylesheet" href="<?= $stylesheet; ?>">
    <?php endforeach; ?>
</head>

