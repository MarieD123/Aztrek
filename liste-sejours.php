<?php
require_once "model/database.php";
require_once "functions.php";

getHeader("Découvrez nos séjours", "Atrek, agence de voyages en Amérique centrale");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $pays = getOnePays($id);

}

$sejours = getAllSejoursByPays($id);
?>

    <body class="liste-sejours"><?php if (isset($id)) { ?>
<header class="header-top" id="top"
        style="background: url('uploads/<?= getOneEntity("pays", $id)["image"]; ?>') bottom no-repeat;">

    <?php getMenu(); ?>



        <h1>Découvrez le <?= $pays["libelle"]; ?></h1>

    <?php } else { ?>
    <header class="header-top" id="top"
            style="background: url('uploads/<?= $pays["image"]; ?>') bottom no-repeat;">

    <?php require_once "layout/menu.php"; ?>

        <h1>Découvrez tous nos séjours</h1>

    <?php } ?>


</header>

<main class="container">

    <aside class="search-form">
        <div class="criteres">
            <h4>Vos critères actuels</h4>
            <span>Costa rica</span><br>
            <button>Réinitialiser les filtres</button>
        </div>
        <form id="form" name="filter" action="#" method="get">
            <ul>
                <li class="item" id="item-1">
                    <h3>Destination</h3>
                    <ul class="sub-list" id="sub-list-1">
                        <li class="sub-list-item">
                            <input type="checkbox" name="destination" id="dest-2" value="2">
                            <label for="dest-2">Costa Rica</label>
                        </li>
                        <li class="sub-list-item">
                            <input type="checkbox" name="destination" id="dest-3" value="3">
                            <label for="dest-3">Guatemala</label>
                        </li>
                        <li class="sub-list-item">
                            <input type="checkbox" name="destination" id="dest-4" value="4">
                            <label for="dest-4">Honduras</label>
                        </li>
                        <li class="sub-list-item">
                            <input type="checkbox" name="destination" id="dest-5" value="5">
                            <label for="dest-5">Mexique</label>
                        </li>
                        <li class="sub-list-item">
                            <input type="checkbox" name="destination" id="dest-6" value="6">
                            <label for="dest-6">Salvador</label>
                        </li>
                    </ul>
                </li>
                <li class="item" id="item-2">
                    <h3>Durée</h3>
                    <ul class="sub-list" id="sub-list-2">
                        <li class="sub-list-item">
                            <input type="checkbox" name="duree" id="duree-1" value="1">
                            <label for="duree-1">7 jours</label>
                        </li>
                        <li class="sub-list-item">
                            <input type="checkbox" name="duree" id="duree-2" value="1">
                            <label for="duree-2">14 jours</label>
                        </li>
                        <li class="sub-list-item">
                            <input type="checkbox" name="duree" id="duree-3" value="1">
                            <label for="duree-3">21 jours</label>
                        </li>
                    </ul>
                </li>
                <li class="item" id="item-3">
                    <h3>Date de départ</h3>
                    <div class="calendrier"></div>
                </li>
                <li class="item" id="item-4">
                    <h3>Difficulté</h3>
                    <ul class="sub-list" id="sub-list-3">
                        <li class="sub-list-item">
                            <input type="checkbox" name="difficulte" id="difficulte-1" value="1">
                            <label for="difficulte-1">1/5</label>
                        </li>
                        <li class="sub-list-item">
                            <input type="checkbox" name="difficulte" id="difficulte-2" value="1">
                            <label for="difficulte-2">2/5</label>
                        </li>
                        <li class="sub-list-item">
                            <input type="checkbox" name="difficulte" id="difficulte-3" value="1">
                            <label for="difficulte-3">3/5</label>
                        </li>
                        <li class="sub-list-item">
                            <input type="checkbox" name="difficulte" id="difficulte-4" value="1">
                            <label for="difficulte-4">4/5</label>
                        </li>
                        <li class="sub-list-item">
                            <input type="checkbox" name="difficulte" id="difficulte-5" value="1">
                            <label for="difficulte-5">5/5</label>
                        </li>
                    </ul>
                </li>
                <li class="item" id="item-5">
                    <h3>Budget</h3>
                    <div class="fourchette-prix"></div>
                </li>
            </ul>
            <button type="submit">Filtrer</button>
        </form>
    </aside>

    <section>
        <?php foreach ($sejours as $sejour) : ?>

            <?php include "include/sejour_inc.php" ?>

        <?php endforeach; ?>

    </section>
</main>

<?php getFooter(); ?>