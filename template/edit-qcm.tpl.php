<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
    <form action="" method="POST">
        <label>Intitulé du Qcm</label>
        <input type="text" name="title" value="<?= htmlspecialchars($qcm->getTitle()) ?>" required/>
        <input type="submit" name="submit" value="Enregistrer" />

        <select name="id">
            <?php foreach($qcms as $qcm): ?>
                <option value="<?= $qcm->getId() ?>" >
                    <?= $qcm->getTitle() ?>
                </option>
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