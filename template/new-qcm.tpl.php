<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">

    
    <div class="my-5">
        <button type="button" class="btn btn-outline-secondary"><a href="index.php">retour</a></button>
    </div>
        <h2>Titre nouveau QCM</h2>
        <form action="" method="POST">
            <label>Titre du QCM</label>
                <div class="my-5">
                    <input class="mb-4" type="text" name="title" required/>
                </div>
            <button type="button" class="btn btn-outline-success"><input type="submit" name="submit" value="Enregistrer" /></button>
        </form>
        <?php if(!empty($message)): ?>
        <div classs="alert">
            <?= $message ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php require '../template/partials/_bottom.tpl.php'; ?>
