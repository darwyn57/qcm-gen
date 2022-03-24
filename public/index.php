<?php   


require '../app/Manager/QcmManager.php';

<div class="container">

$qcmnw = new QcmManager();
$qcm1 = $qcmnw->getAll();

var_dump($qcm1);