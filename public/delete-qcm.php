<?php

if(isset($_GET['id']))
{

    $message = "";

    // Récupère les données du qcm dont l'id est == à $_GET['id']
    require '../app/Manager/QcmManager.php';
    $qcmManager = new QcmManager();
    $qcm = $qcmManager->get($_GET['id']);

    // On recupère tous les qcms depuis la db
    //require '../app/Manager/QcmManager.php';
    // $qcmManager = new QcmManager();
    //$qcms = $qcmManager->getAll();


    if(isset($_GET['submit']))
    {
        try
        {
            $formErrors = [];
            if(empty($_GET['id']))
                $formErrors[] = "L'id est obligatoire dans l'url'";

            

            $qcmManager->deleteQCM($_GET['id']);
            header('Location: /index.php');
        }
        catch(Exception $e)
        {
            $message = $e->getMessage();
        }

    }
    require '../template/delete-qcm.tpl.php';
}