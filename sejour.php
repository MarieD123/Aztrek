<?php

require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$sejour = getOneSejour($id);

$etapes = getAllEtapesBySejour($id);
$departs = getAllDepartsBySejour($id);
$place = getParticipantsByDepart($id);


getHeader($sejour["titre"], "Atrek, agence de voyages en Amérique centrale");


?>

    <body class="page-sejour">
<header class="header-top">
    <?php getMenu(); ?>
</header>

<main>
    <section class="resume">
        <h1 class="vert"><?= $sejour["titre"]; ?></h1>
        <article class="resume-yucatan container">
            <div class="description">
                <p><?= $sejour["description_courte"]; ?></p>
                <div class="points-forts caminando">
                    <h3 class="vert">vous apprécierez :</h3>
                    <ul>
                        <li>
                            <?php
                            $pts_forts_list = $sejour['pts_forts'];
                            echo str_replace(', ', '</li><li>', $pts_forts_list);
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="infos-resume caminando">
                <img src="uploads/<?= $sejour["image"]; ?>" alt="palenque">
                <ul>
                    <?php if (isset(getBetterPrice($sejour['id'])['prix'])) { ?>
                        <li class="infp-prix">
                            à partir de <span><?= getBetterPrice($sejour['id'])['prix']; ?>€</span>
                        </li>
                    <?php } ?>
                    <li class="info-duree"><?= $sejour['duree']; ?> jours</li>
                    <li class="info-niveau">
                        <div class="difficulte difficulte-<?= $sejour['difficulte']; ?>">Difficulté :
                        </div>
                    </li>
                </ul>
            </div>
        </article>
    </section>

    <section class="itineraire caminando">
        <h2 class="vert">Itinéraire</h2>
        <div class="container">
            <div class="map">
                <img src="./uploads/<?= $sejour['itineraire']; ?>" alt="carte de l'itinéraire">
            </div>
            <ul class="caminando">
                <?php foreach ($etapes as $etape) : ?>
                    <li><a href="#j<?= $etape['num']; ?>"><?= "J" . $etape["num"] . " : " . $etape["titre"]; ?></a></li>
                <?php endforeach; ?>

            </ul>
        </div>
    </section>

    <section class="etapes">

        <h2 class="vert">Jour par jour</h2>

        <?php foreach ($etapes as $etape) : ?>

            <article class="etape container" id="j<?= $etape['num']; ?>">
                <img src="./images/j<?= $etape['num']; ?>-bleu.png" alt="j<?= $etape['num']; ?>" class="jour">
                <div class="details">
                    <h3><?= $etape['titre']; ?></h3>
                    <p><?= $etape['description']; ?></p>
                </div>
                <img src="./uploads/<?= $etape['image']; ?>" alt="<?= $etape['titre']; ?>" class="photo"
                     id="photo<?= $etape['num']; ?>">
            </article>

        <?php endforeach; ?>


    </section>

    <section class="departs">
        <h2>Prochains départs</h2>

        <?php if ($departs) : ?>
            <TABLE>
                <TR>
                    <TH>Du</TH>
                    <TH>Au</TH>
                    <TH>Prix</TH>
                    <TH>Départ assuré à partir de</TH>
                    <th>Réservation</th>
                </TR>

                <?php foreach ($departs as $depart) : ?>
                <TR>
                    <Td> <?= $depart["date_depart_format"]; ?></Td>
                    <TD> <?= $depart["date_retour_format"]; ?></TD>
                    <TD> <?= $depart["prix"]; ?>€</TD>
                    <?php if(getParticipantsByDepart( $depart["id"])["places_dispo"] == 0 ): ?>
                        <td>Complet</td>
                    <?php elseif(getParticipantsByDepart( $depart["id"])["places_dispo"] >= 4 ) : ?>
                        <td>Départ assuré (<?= getParticipantsByDepart( $depart["id"])["places_dispo"]; ?>)</td>
                    <?php elseif(getParticipantsByDepart( $depart["id"])["places_dispo"] == 3 ) : ?>
                        <td>Départ assuré au prochain inscrit</td>
                    <?php else : ?>
                        <td>Départ assuré dès 4 inscrits</td>
                    <?php endif; ?>
                    <td><a href="" class="btn-cta btn-green">S'inscrire</a></td>

                </TR>
                <?php endforeach; ?>

            </TABLE>
        <?php else: ?>
            <p>De nouvelles dates de départs seront bientôt disponibles.</p>
        <?php endif; ?>
    </section>

</main>

<?php getFooter(); ?>