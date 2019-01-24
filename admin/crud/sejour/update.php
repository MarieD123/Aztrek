<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$sejour = getOneEntity("sejour", $id);
$destinations = getAllEntities("pays");
$difficultes = getAllEntities("difficulte");

require_once '../../layout/header.php';
?>

<h1>Modification d'un séjour</h1>

    <form action="update_query.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Titre</label>
            <input type="text" name="titre" value="<?= $sejour["titre"]; ?>" class="form-control" placeholder="Titre" required>
        </div>
        <div class="form-group">
            <label>Pays</label>
            <select name="pays_id" class="form-control">
                <?php foreach ($destinations as $destination) : ?>
                    <option value="<?php echo $destination["id"]; ?>">
                        <?php echo $destination["libelle"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control" required>
            <?php if ($sejour["image"]) : ?>
                <img src="../../../uploads/<?php echo $sejour["image"]; ?>" class="img-thumbnail">
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label>Durée (jours)</label>
            <input type="number" name="duree"  value="<?= $sejour["duree"]; ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Difficulté</label>
            <select name="difficulte_id" class="form-control">
                <?php foreach ($difficultes as $difficulte) : ?>
                    <?php $selected = ($difficulte["id"] == $sejour["difficulte_id"]) ? "selected" : ""; ?>
                    <option value="<?php echo $difficulte["id"]; ?>" <?php echo $selected; ?>>
                        <?php echo $difficulte["libelle"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Nombre de places</label>
            <input type="number" name="places"  value="<?= $sejour["nb_places"]; ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Description courte</label>
            <textarea name="description_courte"  value="<?= $sejour["description_courte"]; ?>" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Points forts</label>
            <textarea name="pts_forts"  value="<?= $sejour["pts_forts"]; ?>" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Itinéraire</label>
            <input type="file" name="itineraire" class="form-control"  required>
            <?php if ($sejour["itineraire"]) : ?>
                <img src="../../../uploads/<?php echo $sejour["itineraire"]; ?>" class="img-thumbnail">
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label>Image secondaire</label>
            <input type="file" name="image_secondaire" class="form-control">
            <?php if ($sejour["image_secondaire"]) : ?>
                <img src="../../../uploads/<?php echo $sejour["image_secondaire"]; ?>" class="img-thumbnail">
            <?php endif; ?>
        </div>

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" class="btn btn-success mb-5">
            <i class="fa fa-check"></i>
            Ajouter
        </button>
    </form>


<?php require_once '../../layout/footer.php'; ?>