<?php
class Reponse
{
  
    private $id;
    private $verification;
    private $temps;
    private $note;
    private $questionId;

    
       
    function __construct( ){
           
    }

    function getId(){
        return $this->id;
    }

    function getVerification(){
        return $this->verification;
    }
    
    function getTemps(){
        return $this->temps;
    }

    function getNote(){
        return $this->note;
    }

    function getQuestion(){
        return $this->note;
    }

    function setVerification(string $verification){
        $this->verification=$verification;
    }

    function setTemps(string $temps){
        $this->temps=$temps;
    }

    function setNote(string $note){
        $this->note=$note;
    }

    function setQuestion(Question $questionId){
        $this->questionId=$questionId;
    }









}



?>