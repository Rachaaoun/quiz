<?php
	include '../config.php';
	include_once '../Model/Reponse.php';

class ReponseController {

    
    
	function afficherReponses(){
		$sql="SELECT * FROM reponse";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur:'. $e->getMeesage());
		}
	}

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

	function ajouterReponse($reponse){

		$sql="INSERT INTO reponse (verification, temps,note,questionId) 
			VALUES (:verification,:temps,:note,:questionId)";
			$db = config::getConnexion();
			try{
				
				$query = $db->prepare($sql);
				
				$query->execute([
					'verification' => $reponse->getVerification(),
					'temps' => $reponse->getTemps(),
					'note' => $reponse->getNote(),
					'questionId' => $reponse->getQuestion(),
				]);	
				//header('Location: afficherquestion.php');
				
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		
	}

	function modifierReponse($reponse,$id){

		try {
			$db = config::getConnexion();
		

			$sql="UPDATE reponse SET verification= :verification,temps= :temps,note= :note,questionId= :questionId WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':verification', $reponse->getVerification());
			$req->bindValue(':id', $id);
			$req->bindValue(':temps', $reponse->getTemps());
			$req->bindValue(':note', $reponse->getNote());
			$req->bindValue(':questionId', $reponse->getQuestion());
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

	function recupererReponse($id){

		$sql="SELECT * from reponse where id=$id";
		$db = config::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();

			$reponse=$query->fetch();
			return $reponse;
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


