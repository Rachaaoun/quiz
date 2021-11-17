<?php
include 'headerBack.php';
include '../Controller/QuestionController.php';
	$questionC=new QuestionController();
	$listeQuestion=$questionC->afficherQuestions(); 
?>



<div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-large tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">Numero</th>
                    <th scope="col" style="{position:center;}">Question</th>
                    <th scope="col">Type</th>
                    <th scope="col">Cours</th>
					<th></th>
					<th></th>
                   
                  </tr>
                </thead>
                <tbody>
				<?php
				foreach($listeQuestion as $question){
			?>
                  <tr>
                  <td><?php echo $question['id']; ?></td>
                    <td class="tm-product-name"><?php echo $question['description']; ?></td>
                    <td><?php echo $question['type']; ?></td>
                    <td><?php echo $question['course']; ?></td>
                    
                   
                    
                    <td>
					<form method="POST" action="modifierquestion.php?id=<?php echo $response['questionId']; ?>">
						<input type="submit" name="Modifier" value="Modifier" class="btn btn-primary btn-block text-uppercase sm-1">
						<input type="hidden" value=<?PHP echo $question['id']; ?> name="id">
					</form>
				</td>

                <td>
				<a href="afficherreponseparquestion.php?id=<?php echo $question['id']; ?>"  class="tm-product-delete-link" >
				Afficher Reponses
			</a>
			
                    
                    </td>
				<td>
				<a href="supprimerquestion.php?id=<?php echo $question['id']; ?>"  class="tm-product-delete-link" >
				<i class="far fa-trash-alt tm-product-delete-icon"></i>
			</a>
			
                    
                    </td>
                  </tr>
                  
				  <?php
				}
			?>
                  
                 
                 
                </tbody>
              </table>
            </div>
            <!-- table container -->
			<a
              href="ajouterquestion.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new Question</a>




	
			</div>
		</div>
	</div>



