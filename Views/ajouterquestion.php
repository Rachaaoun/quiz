<?php
       include 'headerBack.php';
       include '../Controller/QuestionController.php';
	  $questionC=new QuestionController();
  //  $categorieC=new ProduitController();
	//$listeCategorie=$categorieC->affichercategories(); 

    $error = "";

    // create adherent
    $question = null;
   // $listeQuestion=$reponseC->afficherQuestions(); 
    if (
       
		isset($_POST["description"]) &&		
        isset($_POST["type"]) &&
        isset($_POST["course"]) 
       // isset($_POST["CategorieId"]) 
		
    ) {
        if (
           
			!empty($_POST['type']) &&
            !empty($_POST["description"]) &&
            !empty($_POST["course"]) 
           // !empty($_POST["CategorieId"])
        ) {
            $question = new Question(

				$_POST['description'],
                $_POST['type'], 
                $_POST["course"] ,
			
            );
            $questionC->ajouterquestion($question);
           
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
			<h2 class="tm-block-title d-inline-block">Add Question</h2>
		  </div>
		</div>
		<div class="row tm-edit-product-row">
		  <div class="col-xl-12 col-lg-12 col-lg-12">
			<form action="" class="tm-edit-product-form" method="POST">
			  <div class="form-group lg-12">
				<label
				  for="name"
				  >Description
				</label>
				<input type="text" name="description" id="description" maxlength="80"  class="form-control validate">

			  </div>
			  <div class="form-group mb-3">
				<label
				  for="description"
				  >Type
				  </label>

				<textarea type="text" name="type" id="type" maxlength="40"  class="form-control validate"></textarea>

			  </div>

			  <div class="form-group mb-3">
				<label
				  for="classe"
				  >Cours
				  </label>

				<textarea type="text" name="course" id="classe" maxlength="80"  class="form-control validate"></textarea>

			  </div>

			  
			
			  
		  </div>
		 
		  <div class="col-12">
			 
			<input type="submit" href="afficherquestionB.php"class="btn btn-primary btn-block text-uppercase" value="Add Response Now" ></input>
	  
		</div>
		</form>
		</div>
	  </div>
	</div>
  </div>
</div>










</body>
</html>