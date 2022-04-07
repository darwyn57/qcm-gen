<?php

require '../app/Manager/QuestionManager.php';
require '../app/Manager/AnswerManager.php';
$questionManager = new QuestionManager();
$questions = $questionManager->getAll();


$message = "";

if(isset($_POST['submit']))
{
    if(!empty($_POST['text']))
    {
        require '../app/Manager/AnswerManager.php';
        $answer = new AnswerManager();
        $answerId = $answerManager->insert( $_POST['id'] ,$_POST['text'], $_POST['is_the_good'],$_POST['id_question']);

        if($answerId)
        {
            header('Location: /index-answer.php'); die;
        }
        else
        {
            $message = "Une erreur s'est produite lors de l'enregistrement";
        }
    }
    else
    {
        $message = "Le titre est obligatoire";
    }
}


require '../template/new-answer.tpl.php';