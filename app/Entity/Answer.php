<?php

class Answer extends Entity
{

    private string $text;
    private int $answer_id;
    private int $question_id;
    private int $id_qcm;

    private bool $isTheGoodAnswer;

    public function __construct(string $text, bool $isTheGoodAnswer = false)
    {
        $this->setText($text)->setIsTheGoodAnswer($isTheGoodAnswer);
    }

    // TODO : ajouter les propriétés

    // TODO : ajouter les méthodes


    /**
     * Get the value of text
     */ 
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */ 
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get the value of isTheGoodAnswer
     */ 
    public function getIsTheGoodAnswer()
    {
        return $this->isTheGoodAnswer;
    }

    /**
     * Set the value of isTheGoodAnswer
     *
     * @return  self
     */ 
    public function setIsTheGoodAnswer($isTheGoodAnswer)
    {
        $this->isTheGoodAnswer = $isTheGoodAnswer;

        return $this;
    }

    /**
     * Get the value of answer_id
     */ 
    public function getAnswer_id()
    {
        return $this->answer_id;
    }

    /**
     * Set the value of answer_id
     *
     * @return  self
     */ 
    public function setAnswer_id($answer_id)
    {
        $this->answer_id = $answer_id;

        return $this;
    }

    /**
     * Get the value of question_id
     */ 
    public function getQuestion_id()
    {
        return $this->question_id;
    }

    /**
     * Set the value of question_id
     *
     * @return  self
     */ 
    public function setQuestion_id($question_id)
    {
        $this->question_id = $question_id;

        return $this;
    }

    /**
     * Get the value of id_qcm
     */ 
    public function getId_qcm()
    {
        return $this->id_qcm;
    }

    /**
     * Set the value of id_qcm
     *
     * @return  self
     */ 
    public function setId_qcm($id_qcm)
    {
        $this->id_qcm = $id_qcm;

        return $this;
    }
}