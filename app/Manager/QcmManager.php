<?php

require '../app/Entity/QCM.php';





class QcmManager
{

    private $pdo;

    public function __construct()
    {
        try 
        {
            $this->pdo = new PDO('mysql:host=localhost;dbname=qcm','root');

        }
        catch(PDOException $e)
        {
            echo 'error:' . $e->getMessage(); 
            die;
        }
    }
    public function getAll()
    {
        $sql = "SELECT* FROM qcm";
        $req = $this->pdo->prepare("SELECT * FROM qcm");
        $req->execute();
        $result = [];       
        $qcms = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach($qcms as $qcm)
        {
            $obj = new QCM;
            $obj
            $obj->setTitle($qcm['title']);
            $result[] = $obj;

        }
        return $result;
    }


       
    }



