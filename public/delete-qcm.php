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


    if(isset($_GET['id']))
    {
        try
        {
            $formErrors = [];
            if(empty($_GET['id']))
                $formErrors[] = "L'id est obligatoire dans l'url'";

            if(count($formErrors) > 0)
                throw new Exception(implode("<br />", $formErrors));

            $qcmManager->deleteQCM($_GET['id']);
            header('Location: /index.php');
        }
        catch(Exception $e)
        {
            $message = $e->getMessage();
        }

    }
}