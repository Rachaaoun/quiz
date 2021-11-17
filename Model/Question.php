<?php
class Question
{
    private $id;
    private $description;
    private $type;
    private $course;
   
 
   
       
   
        function __construct(  $description,$type,$course   ){
     
        $this->description=$description;
        $this->type=$type;
        $this->course=$course;
        //$this->file_path=$file_path   ;
     
   
           
    }
 
    function getId(){
        return $this->id;
    }
 
    function getDescription(){
        return $this->description;
    }
   
    function getType(){
        return $this->type;
    }
 
    function getCourse(){
        return $this->course;
    }
 
   
 
    function setDescription(string $description){
        $this->description=$description;
    }
 
    function setType(string $type){
        $this->type=$type;
    }
 
    function setCourse(string $course){
        $this->course=$course;
    }
 
   
 
 
 
 
 
 
 
 
}
 
 
 
 
?>


