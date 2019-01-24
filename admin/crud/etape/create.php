<?php require_once '../../layout/header.php';

$sejours = getAllEntities("sejour");

?>

<h1>Ajout d'une étape</h1>

<form action="create_query.php" method="POST" enctype="multipart/form-data">
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
    <div class="form-group">
        <label>Numéro de l'étape</label>
        <input type="text" name="num" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="titre" class="form-control" placeholder="Titre" required>
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" name="description" class="form-control" placeholder="Description" required>
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>