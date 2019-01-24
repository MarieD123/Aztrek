<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$depart = getOneEntity("depart", $id);
$sejours = getAllEntities("sejour");

require_once '../../layout/header.php';
?>

    <h1>Modification d'une destination</h1>

    <form action="update_query.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Date de départ</label>
            <input type="date" name="date_depart" value="<?php echo $depart["date_depart"]; ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>prix</label>
            <input type="text" name="prix" value="<?php echo $depart["prix"]; ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Séjour</label>
            <select name="sejour_id" class="form-control">
                <?php foreach ($sejours as $sejour) : ?>
                <?php $selected = ($sejour["id"] == $depart["sejour_id"]) ? "selected" : "" ?>
                    <option value="<?php echo $sejour["id"]; ?>" <?php echo $selected; ?>>
                        <?php echo $sejour["titre"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Ajouter
        </button>
    </form>

<?php require_once '../../layout/footer.php'; ?>