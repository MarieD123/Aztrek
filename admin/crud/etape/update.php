<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$destination = getOneEntity("pays", $id);

require_once '../../layout/header.php';
?>

    <h1>Modification d'une destination</h1>

    <form action="update_query.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Libellé</label>
            <input type="text" name="libelle" value="<?php echo $destination["libelle"]; ?>" class="form-control" placeholder="Libellé" required>
        </div>
        <div class="form-group">
            <label>Photo</label>
            <input type="file" name="image" class="form-control">
            <?php if ($destination["image"]) : ?>
                <img src="../../../uploads/<?php echo $destination["image"]; ?>" class="img-thumbnail">
            <?php endif; ?>
        </div>

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Modifier
        </button>
    </form>

<?php require_once '../../layout/footer.php'; ?>