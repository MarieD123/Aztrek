<?php require_once __DIR__."/../config/parameters.php";

$destinations = getAllEntities("pays");
?>

<div class="container-fixed">
    <button class="nav-toggle" data-target=".main-nav">Menu<span></span></button>

    <nav class="main-nav ">
        <div class="logo"><a href="index.php"><img src="./images/logo-nav.png" alt=""></a></div>
        <ul>
            <li class="item has-sublist">
                <a href="#0" class="dropdownStart">Destinations</a>
                <ul class="dropdown">
                    <?php foreach ($destinations as $destination): ?>
                        <li><a href="liste-sejours.php?id=<?= $destination["id"]; ?>"><?= $destination["libelle"]; ?></a></li>
                    <?php endforeach; ?>
                    <li><a href="liste-sejours.php">Toutes nos destinations</a></li>
                </ul>

            </li>
            <li class="item"><a href="#0">Qui sommes nous ?</a></li>
            <li class="item"><a href="#0">Blog</a></li>
            <li class="item"><a href="#0">Contact</a></li>
            <li class="item"><a href="#0"><i class="fas fa-user"></i> Espace client</a></li>

        </ul>

    </nav>


</div>