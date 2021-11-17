<?php


class Reponse
{
  
    private $id;
    private $etudiant;
    private $description;
    private $classe;
    private $questionId;

    
       
    function __construct( $etudiant, $description,$classe,$questionId	){
        $this->etudiant=$etudiant;
        $this->description=$description;
        $this->classe=$classe;
        $this->questionId=$questionId;
        //$this->file_path=$file_path	;
      
    }

    function getId(){
        return $this->id;
    }

    function getDescription(){
        return $this->description;
    }
    
    function getClasse(){
        return $this->classe;
    }

    function getEtudiant(){
        return $this->etudiant;
    }

    function getQuestion(){
        return $this->questionId;
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