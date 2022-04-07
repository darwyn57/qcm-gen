<?php

if(isset($_GET['id']))
{
    $message = "";

    require '../app/Manager/QcmManager.php';
   
    $qcmManager = new QcmManager();
    $qcms = $qcmManager->get($_GET['id']);

    // On recupère tous les qcms depuis la db
    if(isset($_POST['submit']))
    {
        try
        {
            $formErrors = [];
            if(empty($_POST['title']))
                $formErrors[] = "Le titre est obligatoire";


            $qcmManager->update($_GET['id'], $_POST['title']);
            header('Location: /index.php');
        }
        catch(Exception $e)
        {
            $message = $e->getMessage();
        }       
    }
    require '../template/edit-qcm.tpl.php';
}