<article class="fiche-sejour">
    <a href="sejour.php?id=<?= $sejour["id"]; ?>">
        <img src="uploads/<?= $sejour['image']; ?>" alt="<?= $sejour['titre']; ?>">
        <h2><?= $sejour['titre']; ?></h2>
        <h3><?= $sejour['pays']; ?></h3>
        <div class="infos-sejour">
            <div class="duree">
                <i class="fa fa-hourglass"></i>
                <p><?= $sejour['duree']; ?> jours</p>
            </div>
            <div class="difficulte difficulte-<?= $sejour['difficulte']; ?>">Difficulté :
            </div>

            <?php if(isset(getBetterPrice($sejour['id'])['prix'])) {?>
            <div class="prix">
                <i class="fa fa-tag"></i>
                <p>à partir de <span><?= getBetterPrice($sejour['id'])['prix']; ?>€</span></p>
            </div>
            <?php } ?>
        </div>
    </a>
</article>