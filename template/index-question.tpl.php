<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
    <h1>Mes questions</h1>

    <a href="/new-question.php">Nouveau</a>
    <table class="table table-hover table-bordered border-dark">
        <thead>
            <tr class="table-warning table-bordered border-dark">
                <th>Id</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($questions as $q): ?>
            <tr>
                <td class="table-danger"><?= $q->getId() ?></td>
                <td class="table-info"><?= $q->getTitle() ?></td>
                <td>
                <a href="/edit-question.php?id=<?= $q->getId() ?>">Modifier</a>
                    <form action="/delete-question.php" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ?')">
                        <input type="hidden" name="id" value="<?= $q->getId() ?>" />
                        <input type="submit" name="submit" value="Supprimer" />
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php require '../template/partials/_bottom.tpl.php'; ?>