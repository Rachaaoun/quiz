<?php
       include 'headerBack.php';
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
                $_POST['questionId'] 
			
            );
           
            $reponseC->modifierReponse($reponse,$_POST["id"]);
           // header('Location:afficherreponse.php');
           
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
        <?php
			if (isset($_POST['id'])){
			$reponse = $reponseC->recupererReponse($_POST['id']);
				
		?>
		<div class="row tm-edit-product-row">
		  <div class="col-xl-12 col-lg-12 col-lg-12">
			<form action="" class="tm-edit-product-form" method="POST">
			  <div class="form-group lg-12">
              <label for="id" >
                        </label>
                   <input type="text" style="color :transparent ; background:transparent ; border:transparent"  name="id" id="id" class="form-control validate" value="<?php echo $reponse['id']; ?>" maxlength="20">
                

				<label
				  for="name"
				  >Etudiant
				</label>
				<input type="text" name="etudiant" id="etudiant" maxlength="20"  value="<?php echo $reponse['etudiant']; ?>"class="form-control validate">

			  </div>
			  <div class="form-group mb-3">
				<label
				  for="description"
				  >La reponse
				  </label>

				<input type="text" name="description" value="<?php echo $reponse['description']; ?>" id="description" maxlength="50"  class="form-control validate"></textarea>

			  </div>

			  <div class="form-group mb-3">
				<label
				  for="classe"
				  >Classe
				  </label>

				<input type="text" name="classe" id="classe" value="<?php echo $reponse['classe']; ?>"maxlength="20"  class="form-control validate"></textarea>

			  </div>

			  <div class="form-group lg-12">
				<label
				  for="question"
				  >Question 
				</label>
			

			<select name="questionId" id="" class="form-control validate">
				   
				 <?php   foreach($listeQuestion as $question){
				?>

					<option value="<?php echo $question['id']; ?>" name="questionId" id=""><?php echo $question['course']; ?></option>
				   
				   
					<?php } ?>
				
			</select>


			  </div>
		
			
			  
		  </div>
		 
		  <div class="col-12">
			 
			<input type="submit" href="afficherreponse.php"class="btn btn-primary btn-block text-uppercase" value="Update Response Now" ></input>
	  
		</div>
		</form>
		</div>
	  </div>
      <?php } ?>
	</div>
  </div>
</div>



