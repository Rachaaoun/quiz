<?php
class Reponse
{
  
    private $id;
    private $etudiant;
    private $description;
    private $classe;
    private $questionId;

    
       
    function __construct( ){
           
    }

    function getId(){
        return $this->id;
    }

    function getDescription(){
        return $this->descritption;
    }
    
    function getClasse(){
        return $this->classe;
    }

    function getEtudiant(){
        return $this->etudiant;
    }

    function getQuestion(){
        return $this->note;
    }

    function setDescription(string $description){
        $this->description=$description;
    }

    function setEtudiant(string $etudiant){
        $this->etudiant=$etudiant;
    }

  

    function setQuestion(Question $questionId){
        $this->questionId=$questionId;
    }









}



?>