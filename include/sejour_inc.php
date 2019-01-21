<article class="fiche-sejour">
    <a href="sejour.php">
        <img src="uploads/<?= $sejour['image']; ?>" alt="<?= $sejour['titre']; ?>">
        <h2><?= $sejour['titre']; ?></h2>
        <h3><?= $sejour['pays']; ?></h3>
        <div class="infos-sejour">
            <div class="duree">
                <img src="./images/picto-duree.eps" alt="durée">
                <p>14 jours</p>
            </div>
            <p class="difficulte">Difficulte : <img src="./images/barre-niveau-sejour2.png" alt="niveau 3/5">
                <span class="infobulle" aria-label="Randonnées présentant plusieurs passages techniques, il est conseillé d'avoir une expérience de la randonnée en montagne pour suivre cet itinéraire."><img
                            src="./images/infobulle.png" alt="infobulle"></span>
            </p>
            <div class="prix">
                <img src="./images/picto-prix.eps" alt="prix">
                <p>à partir de <span>1399 €</span></p>
            </div>
        </div>
    </a>
</article>