<?php
       include 'headerFront.php';
       include '../Controller/ReponseController.php';
	  $reponseC=new ReponseController();
  //  $categorieC=new ProduitController();
	//$listeCategorie=$categorieC->affichercategories(); 

    $error = "";

    // create adherent
    $reponse = null;
    $listeQuestion=$reponseC->afficherQuestions(); 
    if (
       
		isset($_POST["etudiant"]) &&		
        isset($_POST["description"]) &&
        isset($_POST["classe"]) 
       // isset($_POST["CategorieId"]) 
		
    ) {
        if (
           
			!empty($_POST['etudiant']) &&
            !empty($_POST["description"]) &&
            !empty($_POST["classe"]) 
           // !empty($_POST["CategorieId"])
        ) {
            $reponse = new Reponse(

				$_POST['etudiant'],
                $_POST['description'], 
                $_POST["classe"] ,
                $_GET['id'] 
			
            );
            $reponseC->ajouterReponse($reponse);
           
        }
        else
            $error = "Missing information";
    }

    
?>








<div class="container tm-mt-big tm-mb-big">
  <div class="row">
	<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
	  <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
		<div class="row">
		  <div class="col-12" style="margin-left:300px">
			<h2 class="tm-block-title d-inline-block">Add Response</h2>
		  </div>
		</div>
		<div class="row tm-edit-product-row">
		  <div class="col-xl-12 col-lg-12 col-lg-12">
			<form action="" class="tm-edit-product-form" method="POST">
			  <div class="form-group lg-12">
				<label
				  for="name"
				  >Etudiant
				</label>
				<input type="text" name="etudiant" id="etudiant" maxlength="20"  class="form-control validate">

			  </div>
			  <div class="form-group mb-3">
				<label
				  for="description"
				  >La reponse
				  </label>

				<textarea type="text" name="description" id="description" maxlength="20"  class="form-control validate"></textarea>

			  </div>

			  <div class="form-group mb-3">
				<label
				  for="classe"
				  >Classe
				  </label>

				<textarea type="text" name="classe" id="classe" maxlength="20"  class="form-control validate"></textarea>

			  </div>

	
		
			
			  
		  </div>
		 
		  <div class="col-12">
			 
			<input type="submit" href=""class="btn btn-primary btn-block text-uppercase" value="Add Response Now" ></input>
	  
		</div>
		</form>
		</div>
	  </div>
	</div>
  </div>
</div>










</body>
</html>