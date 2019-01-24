<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$etape = getOneEntity("etape", $id);
$sejours = getAllEntities("sejour");

require_once '../../layout/header.php';
?>

    <h1>Modification d'une étape</h1>

    <form action="update_query.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Difficulté</label>
            <select name="sejour_id" class="form-control">
                <?php foreach ($sejours as $sejour) : ?>
                    <?php $selected = ($sejour["id"] == $etape["sejour_id"]) ? "selected" : ""; ?>
                    <option value="<?php echo $sejour["id"]; ?>" <?php echo $selected; ?>>
                        <?php echo $sejour["titre"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Numéro de l'étape</label>
            <input type="text" name="num" value="<?php echo $etape["num"]; ?>"  class="form-control" required>
        </div>
        <div class="form-group">
            <label>Titre</label>
            <input type="text" name="titre" value="<?php echo $etape["titre"]; ?>" class="form-control" placeholder="Titre" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" value="<?php echo $etape["description"]; ?>"   class="form-control"  required>
        </div>
        <div class="form-group">
        <label>Photo</label>
        <input type="file" name="image" class="form-control">
        <?php if ($etape["image"]) : ?>
            <img src="../../../uploads/<?php echo $etape["image"]; ?>" class="img-thumbnail">
        <?php endif; ?>
        </div>

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Modifier
        </button>
    </form>


<?php require_once '../../layout/footer.php'; ?>