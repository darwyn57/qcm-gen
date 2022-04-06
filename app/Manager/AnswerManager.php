<?php

require '../app/Entity/Answer.php';
require_once '../app/Manager/Manager.php';

class AnswerManager extends Manager
{
    
    public function getAll()
    {
        $sql = 'SELECT * FROM answer';
        $req = $this->getPdo()->prepare($sql);
        $req->execute();
        $answers = $req->fetchAll(PDO::FETCH_ASSOC);
        $result = [];
        foreach($answers as $answer)
        {
            $result[] = (new Aswer())->hydrate($answer);
        }

        return $result;
    }

    /**
     * Recupère les infos d'une question via son id
     * @param int $id
     * 
     * @return Answer
     */
    public function get(int $id) : Answer
    {
        $sql = "SELECT * FROM answer WHERE id = :id";
        $req = $this->getPdo()->prepare($sql);
        $req->execute([
            'id' => $id
        ]);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        
        $answer = (new Answer())->hydrate($result);

        return $answer;
    }

    public function insert(string $title, int $id_qcm) : int
    {
        $sql = "INSERT INTO Answer (title, id_qcm) VALUES (:title, :id_qcm)";
        $req = $this->getPdo()->prepare($sql);
        $req->execute([
            'title' => $title,
            'id_qcm' => $id_qcm
        ]);

        return $this->getPdo()->lastInsertId();
    }

    public function update(int $id, string $title, int $id_qcm)
    {
        $sql = "UPDATE answer SET title = :title, id_qcm = :id_qcm; id_question = :id_question WHERE id = :id";
        $req = $this->getPdo()->prepare($sql);
        return $req->execute(compact('id','title','id_qcm, id_question'));
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM answer WHERE id = :id";
        $req = $this->getPdo()->prepare($sql);
        return $req->execute(compact('id'));
    }

}