<?php require '../template/partials/_top.tpl.php'; ?>

<div class="container">
    <div class="my-5">
        <button type="button" class="btn btn-outline-secondary"><a href="index.php">retour</a></button>
    </div>
   
    <h2>Modifier le titr du QCM</h2>
    <form action="" class="px-4 py-2"method="POST">
        <div class="my-5">
            <label>Intitulé du Qcm</label>
            <input type="text" name="title" value="<?= htmlspecialchars($qcms->getTitle()) ?>" required/>
        </div>
        <input type="submit" name="submit"class="btn btn-outline-success" value="Enregistrer" />        
    </form>
    <?php if(!empty($message)): ?>
    <div class="alert">
        <?= $message ?>
    </div>
    <?php endif; ?>
</div>


<?php require '../template/partials/_bottom.tpl.php';?>