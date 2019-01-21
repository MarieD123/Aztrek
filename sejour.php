<?php

require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$sejour = getOneSejour($id);

$titre_etape = getAllEtapesBySejour($id);



getHeader($sejour["titre"], "Atrek, agence de voyages en Amérique centrale");


?>

<body class="page-sejour">
    <header class="header-top">
        <?php getMenu();?>
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
                        <?php if(isset(getBetterPrice($sejour['id'])['prix'])) {?>
                            <li class="infp-prix">
                                à partir de <span><?= getBetterPrice($sejour['id'])['prix']; ?>€</span>
                            </li>
                        <?php } ?>
                        <li class="info-duree"><?= $sejour['duree']; ?> jours</li>
                        <li class="info-niveau"><div class="difficulte difficulte-<?= $sejour['difficulte']; ?>">Difficulté :
                            </div></li>
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
                    <li><a href="#j1">J1 : Vol pour Mexico</a></li>
                    <li><a href="#j2">J2 : Mexico - Puebla - La Venta (3300m)</a></li>
                    <li><a href="#j3">J3 : Ascension du volcan La Malinche (4461m) - Mexico</a></li>
                    <li><a href="#j4">J4 : Palenque - communauté de Babilonia</a></li>
                    <li><a href="#j5">J5 : Playa del Carmen - Cancún - vol retour</a></li>
                </ul>
            </div>
        </section>

        <section class="etapes">

            <h2 class="vert">Jour par jour</h2>

            <article class="etape container" id="j1">
                <img src="./images/j1-vert.png" alt="j1" class="jour">
                <div class="details">
                    <h3>Vol pour Meixco</h3>
                    <p>Vol pour Mexico</p>
                </div>
            </article>

            <article class="etape container" id="j2">
                <img src="./images/j2-vert.png" alt="j2" class="jour">
                <div class="details">
                    <h3>Mexico - Puebla - La Venta (3300m)</h3>
                    <div class="description-etape">
                        <p>Le matin, nous prenons la route pour Puebla, deuxième ville du pays et important pôle
                            économique et universitaire. La visite du centre-ville, caractérisé par ses maisons
                            coloniales couvertes de ”talaveras” (céramiques typiques de la région), est notamment
                            ponctuée par la visite de la chapelle du Rosaire, qui constitue un exemple remarquable de
                            l’expression de l’architecture baroque au Mexique, et de la bibliothèque Palafoxiana.
                            Fondée en 1646, ce monument historique rassemble plus de 43000 volumes en hébreu, latin,
                            sanscrit ou grec. Transfert au refuge de La Venta (3300m) pour le dîner.</p>
                        <ul>
                            <li>Hébergement : en refuge</li>
                            <li>Transfert : Véhicule privatisé, entre 4h et 4h30</li>
                        </ul>

                    </div>
                </div>
                <img src="./images/img-j2-caminando.jpg" alt="puebla" class="photo" id="photo2">

            </article>

            <article class="etape container" id="j3">
                <img src="./images/j3-vert.png" alt="j3" class="jour">
                <div class="details">
                    <h3>Ascension du volcan La Malinche (4461m) - Mexico</h3>
                    <div class="impair">
                        <img src="./images/img-j3-caminando.jpg" alt="La malinche" class="photo">
                        <div class="description-etape">
                            <p>Départ nocturne pour l’ascension du volcan La Malinche. Le terrain, relativement facile
                                compte tenu de l’altitude, et la souplesse de l’organisation, rendent ce légendaire
                                sommet accessible au plus grand nombre. Il reste néanmoins une véritable ascension, et
                                nécessite donc une bonne préparation physique. D’abord sur une alternance de chemins
                                assez larges et de sentiers qui sillonnent une forêt de conifères, l’ascension devient
                                plus escarpée à l’approche des 4000m mais ne présente pas de grosse difficulté
                                technique. Le sommet, atteint en fin de matinée, offre, du haut de ses 4461m, un
                                fantastique panorama sur la ceinture de feu mexicaine. Nous descendons vers le refuge
                                Malinche (3100m) où nous déjeunons avant de prendre la route pour Mexico. Temps libre
                                et dîner à l’hôtel.</p></div></div>
                            <ul>
                                <li>Attention : cette journée est d’un niveau 3 chaussures, pour le chemin pentu et
                                    l’altitude.</li>
                                <li>Heures de marche : entre 8h et 8h30</li>
                                <li>Dénivelé + : 1300 m</li>
                                <li>Dénivelé - : 1300 m</li>
                                <li>Hébergement : en hôtel</li>
                                <li>Transfert : Véhicule privatisé, entre 3h30 et 4h</li>
                            </ul>
                        
                    
                </div>
            </article>

            <article class="etape container" id="j4">
                <img src="./images/j4-vert.png" alt="j4" class="jour">
                <div class="details">
                    <h3>Palenque - communauté de Babilonia</h3>
                    <div class="description-etape">
                        <p>Entre montagne et forêt tropicale humide, le Chiapas est une superbe région qui dénote
                            franchement avec les cactus auxquels on associe souvent le Mexique. Une randonnée inédite
                            de deux jours autour et dans le site de Palenque, en compagnie d’un guide de la forêt, nous
                            permet de découvrir d’une manière originale le premier joyau du Chiapas. C’est aussi
                            l’occasion de rencontrer la communauté de Babilonia, voisine du site. La première journée
                            de randonnée débute à l’entrée du parc national de Palenque ; nous pique-niquerons au bord
                            du río Chacamax (baignade possible).
                            Dîner et nuit sous tente dans la communauté.</p>
                        <ul>
                            <li>Note : pour cette randonnée itinérante, nous emportons nos affaires pour la nuit et le
                                jour suivant. Nous retrouverons nos sacs le lendemain après la visite de Palenque.</li>
                            <li>Heures de marche : entre 6h et 6h30</li>
                            <li>Hébergement : sous tente</li>

                        </ul>
                    </div>
                </div>
                <img src="./images/img-j4-caminando.jpg" alt="palenque" class="photo" id="photo4">

            </article>

            <article class="etape container" id="j5">
                <img src="./images/j5-vert.png" alt="j5" class="jour">
                <div class="details">
                    <h3>Playa del Carmen - Cancún - vol retour</h3>
                    <div class="description-etape">
                        <p>Temps libre (baignade possible) selon l’horaire du vol retour. Transfert à l’aéroport de
                            Cancún (45mn) et vol de retour. Repas libres.</p>
                    </div>
                </div>
            </article>

        </section>

        <a class="back-to-top" href="#"></a>

    </main>

<?php getFooter();?>