<?php
require_once '../../../model/database.php';

$etapes = getAllEtapes();

$error_msg = null;
if (isset($_GET['errcode'])) {
    $errcode = $_GET['errcode'];
    switch ($errcode) {
        case 23000:
            $error_msg = "Erreur lors de la suppression !";
            break;
        default:
            $error_msg = "Une erreur est survenue !";
            break;
    }
}

require_once '../../layout/header.php';
?>

<h1>Gestion des étapes</h1>

<a href="create.php" class="btn btn-primary">
    <i class="fa fa-plus"></i>
    Ajouter
</a>

<hr>

<?php if ($error_msg) : ?>
    <div class="alert alert-danger">
        <i class="fa fa-times"></i>
        <?php echo $error_msg; ?>
    </div>
<?php endif; ?>

<table class="table table-striped table-bordered table-condensed">
    <thead class="thead-light">
        <tr>
            <th>Séjour</th>
            <th>Numéro</th>
            <th>Titre</th>
            <th>Photo</th>
            <th class="actions">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($etapes as $etape) : ?>
            <tr>
                <td><?php echo $etape['titre_sejour']; ?></td>
                <td><?php echo $etape['num']; ?></td>
                <td><?php echo $etape['titre_etape']; ?></td>
                <td>
                    <img src="../../../uploads/<?php echo $etape['image_etape']; ?>" class="img-thumbnail">
                </td>
                <td class="actions">
                    <a href="update.php?id=<?php echo $etape['step_id']; ?>" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                        Modifier
                    </a>
                    <form action="delete_query.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $etape['step_id']; ?>">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            Supprimer
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../../layout/footer.php'; ?>