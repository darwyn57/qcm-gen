<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
    <h1>Mes reponse</h1>

    <a href="/new-answer.php">Nouveau</a>
    <table class="table table-hover table-bordered border-dark">
        <thead>
            <tr class="table-warning table-bordered border-dark">
                <th>Id</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($answers as $answer): ?>
            <tr>
                <td class="table-danger"><?= $answer->getId() ?></td>
                <td class="table-info"><?= $answer->getTitle() ?></td>
                <td>
                <a href="/edit-question.php?id=<?= $answer->getId() ?>">Modifier</a>
                    <form action="/delete-question.php" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ?')">
                        <input type="hidden" name="id" value="<?= $answer->getId() ?>" />
                        <input type="submit" name="submit" value="Supprimer" />
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php require '../template/partials/_bottom.tpl.php'; ?>