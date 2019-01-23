<?php
require_once '../../../model/database.php';

$destinations = getAllEntities("pays");
$difficultes = getAllEntities("difficulte");

require_once '../../layout/header.php';
?>

    <h1>Ajout d'un séjour</h1>

    <form action="create_query.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Titre</label>
            <input type="text" name="titre" class="form-control" placeholder="Titre" required>
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
        </div>
        <div class="form-group">
            <label>Durée (jours)</label>
            <input type="number" name="duree" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Difficulté</label>
            <select name="difficulte_id" class="form-control">
                <?php foreach ($difficultes as $difficulte) : ?>
                    <option value="<?php echo $difficulte["id"]; ?>">
                        <?php echo $difficulte["libelle"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Nombre de places</label>
            <input type="number" name="places" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Description courte</label>
            <textarea name="description_courte" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Points forts</label>
            <textarea name="pts_forts" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Itinéraire</label>
            <input type="file" name="itineraire" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Image secondaire</label>
            <input type="file" name="image_secondaire" class="form-control">
        </div>

        <button type="submit" class="btn btn-success mb-5">
            <i class="fa fa-check"></i>
            Ajouter
        </button>
    </form>

<?php require_once '../../layout/footer.php'; ?>