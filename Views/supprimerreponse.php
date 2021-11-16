<?php
    include_once '../Model/reponse.php';
    include_once '../Controller/ReponseController.php';


   
       $error = "";
   
       // create adherent
       $reponse = null;
   
       // create an instance of the controller
       $reponseC = new ReponseController();
      

	$reponseC->supprimerReponse($_GET["id"]);
	header('Location:afficherreponse.php');
?>