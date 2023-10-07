<?php 

namespace Source\Models;

use Source\Core\Connect;

class Faq {
    private $id_faq;
    private $title;
    private $question;
    private $answer;

    public function __construct (
        $id_faq = null,
        $title = null,
        $question = null,
        $answer = null
    ){
        $this->id_faq = $id_faq;
        $this->title = $title;
        $this->question = $question;
        $this->answer = $answer;
    }

    public function getIdFaq() {
        return $this->id_faq;
    }
    public function setIdFaq($id_faq): void {
        $this->id_faq = $id_faq;
    }
    public function getTitle() {
        return $this->title;
    }
    public function setTitle($title): void {
        $this->title = $title;
    }
    public function getQuestion() {
        return $this->question;
    }
    public function setQuestion($question): void {
        $this->question = $question;
    }
    public function getAnswer() {
        return $this->answer;
    }
    public function setAnswer($answer): void {
        $this->answer = $answer;
    }

    public function selectAll()
    {
        $stm = Connect::getInstance()->query("SELECT * FROM faqs");
        return $stm->fetchAll();
        
    }
}