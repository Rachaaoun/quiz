<?php
	include '../config.php';
	include_once '../Model/Question.php';

class QuestionController {

    
	function afficherQuestions(){
		$sql="SELECT * FROM question";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur:'. $e->getMeesage());
		}
	}



	function ajouterQuestion($question){

		$sql="INSERT INTO question (description, type,course) 
			VALUES (:description,:type,:course)";
			$db = config::getConnexion();
			try{
				
				$query = $db->prepare($sql);
				
				$query->execute([
					'description' => $question->getDescription(),
					'type' => $question->getType(),
					'course' => $question->getCourse(),
					
				]);	
				//header('Location: afficherquestion.php');
				
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		
	}

	function modifierQuestion($question,$id){

		try {
			$db = config::getConnexion();
		

			$sql="UPDATE question SET description= :description,type= :type,course= :course WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':description', $question->getDescription());
			$req->bindValue(':id', $id);
			$req->bindValue(':type', $question->getType());
			$req->bindValue(':course', $question->getCourse());
			
			$req->execute();
		//	echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}

		
	}

	function supprimerReponse($id){

		$sql="DELETE FROM reponse WHERE id=:id";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':id', $id);
		try{
			$req->execute();
			
		}
		catch(Exception $e){
			die('Erreur:'. $e->getMeesage());
		}
	
	}

	function recupererQuestion($id){

		$sql="SELECT * from question where id=$id";
		$db = config::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();

			$question=$query->fetch();
			return $question;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}

	function afficherReponseParQuestion($QuestionId){
		$sql="SELECT * FROM reponse where questionId=$QuestionId";
			
		$db = config::getConnexion();

		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur:'. $e->getMeesage());
		}
	}
    
    
    







    

    
    
    
    
    
    
    







    
    
    
    }



?>