<?php
    include_once '../Model/question.php';
    include_once '../Controller/QuestionController.php';


   
       $error = "";
   
       // create adherent
       $question = null;
   
       // create an instance of the controller
       $questionC = new QuestionController();
      

	$questionC->supprimerQuestion($_GET["id"]);
	header('Location:afficherquestionB.php');
?>