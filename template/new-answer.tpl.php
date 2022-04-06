<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
    <form action="" method="POST">
        <label>Intitulé de la reponse</label>
        <input type="text" name="title" required/>
        <input type="submit" name="submit" value="Enregistrer" />

        <select name="id_question">
            <?php foreach($question_ids as $question_id): ?>
                <option value="<?= $question_id->getQuestion_id() ?>"><?= $question_id->getText() ?></option>
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