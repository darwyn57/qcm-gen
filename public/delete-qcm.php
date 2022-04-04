<?php

if(isset($_POST['submit']) && isset($_GET['id']))
{

    require '../app/Manager/QcmManager.php';
    $qcmManager = new QcmManager();
    $qcmManager->delete($_GET['id']);

    header('Location: /index.php'); die;

}