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

		$sql="INSERT INTO reponse (etudiant, description,classe,questionId) 
			VALUES (:etudiant,:description,:classe,:questionId)";
			$db = config::getConnexion();
			try{
				
				$query = $db->prepare($sql);
				
				$query->execute([
					'etudiant' => $reponse->getEtudiant(),
					'description' => $reponse->getDescription(),
					'classe' => $reponse->getClasse(),
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
		

			$sql="UPDATE reponse SET etudiant= :etudiant,description= :description,classe= :classe,questionId= :questionId WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':etudiant', $reponse->getEtudiant());
			$req->bindValue(':id', $id);
			$req->bindValue(':description', $reponse->getDescription());
			$req->bindValue(':classe', $reponse->getClasse());
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


