<?php
require_once '../../../model/database.php';

$sejours = getAllEntities("sejour");

require_once '../../layout/header.php'; ?>

<h1>Ajout d'une destination</h1>

<form action="create_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Date de départ</label>
        <input type="date" name="date_depart" class="form-control" placeholder="Titre" required>
    </div>
    <div class="form-group">
        <label>prix</label>
        <input type="text" name="prix" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Séjour</label>
        <select name="sejour_id" class="form-control">
            <?php foreach ($sejours as $sejour) : ?>
                <option value="<?php echo $sejour["id"]; ?>">
                    <?php echo $sejour["titre"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>