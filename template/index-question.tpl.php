<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
<button type="button" class="my-5 btn btn-outline-secondary"><a href="index.php">Retour QCM</a></button>
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
                <button type="button" class="btn btn-outline-info"><a href="/edit-question.php?id=<?= $q->getId() ?>">Modifier</a></button>
                <button type="button" class="btn btn-outline-danger"><form action="/delete-question.php" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ?')">
                        <input type="hidden" name="id" value="<?= $q->getId() ?>" />
                        <input type="submit" name="submit" value="Supprimer" />
                    </form></button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php require '../template/partials/_bottom.tpl.php'; ?>