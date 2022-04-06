<?php

require '../app/Entity/QCM.php';
require_once '../app/Manager/Manager.php';

class QcmManager extends Manager
{

    public function getAll()
    {
        $sql = 'SELECT * FROM qcm';
        $req = $this->getPdo()->prepare($sql);
        $req->execute();
        $qcms = $req->fetchAll(PDO::FETCH_ASSOC);
        $result = [];
        foreach($qcms as $qcm)
        {
            $result[] = (new QCM())->hydrate($qcm);
        }

        return $result;
    }
    public function get(int $id) :QCM
    {
        $sql = "SELECT * FROM QCM WHERE id = :id";
        $req = $this->getPdo()->prepare($sql);
        $req->execute([
            'id' => $id
        ]);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        
        $QCM = (new QCM())->hydrate($result);

        return $QCM;
    }

    public function insert(string $title) : int
    {
        $sql = "INSERT INTO qcm (title) VALUES (:title)";
        $req = $this->getPdo()->prepare($sql);
        $req->execute([
            'title' => $title
        ]);

        return $this->getPdo()->lastInsertId();
    }
    public function deleteQCM(int $id)
    {
        $sql = "DELETE FROM qcm WHERE id = :id";
        $req = $this->getPdo()->prepare($sql);
        return $req->execute(compact('id'));
       
    }
    public function update(int $id, string $title)
    {
        $sql = "UPDATE qcm SET title = :title WHERE id = :id";
        $req = $this->getPdo()->prepare($sql);
        return $req->execute(compact('id','title'));
    }
}