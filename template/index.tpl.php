<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
    <h1>Mes QCMs</h1>

    <a href="/new-qcm.php">Nouveau</a>

    <table class="table table-hover table-bordered border-dark">
        <thead>
            <tr class="table-warning table-bordered border-dark">
                <th>Id</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($qcms as $qcm): ?>
            <tr>
                <td class="table-danger"><?= $qcm->getId() ?></td>
                <td class="table-info"><?= $qcm->getTitle() ?></td>
                <td>
                    <a href="">Modifier</a>
                    <a href="">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php require '../template/partials/_bottom.tpl.php'; ?>
