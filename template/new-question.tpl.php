<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
    <button type="button" class="btn btn-outline-info"><a href="index-question.php">Revenir aux questions</a></button>
    <h1>Nouvelle question</h1>
        <form action="" method="POST">
            <label>Intitulé de la question</label>
            <input type="text" name="title" required/>
            <input type="submit" name="submit" value="Enregistrer" />

            <select name="id_qcm">
                <?php foreach($qcms as $qcm): ?>
                    <option value="<?= $qcm->getId() ?>"><?= $qcm->getTitle() ?></option>
                <?php endforeach; ?>
            </select>
        </form>
        <?php if(!empty($message)): ?>
        <div class="alert">
            <?= $message ?>
        </div>
        <?php endif; ?>
</div>

<?php require '../template/partials/_bottom.tpl.php'; ?>