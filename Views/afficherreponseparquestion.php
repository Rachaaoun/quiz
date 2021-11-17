<?php
include 'headerBack.php';
include '../Controller/ReponseController.php';
	$reponseC=new ReponseController();
	$listeReponse=$reponseC->afficherReponseParQuestion($_GET["id"]); 
?>



<div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-large tm-product-table">
                <thead>
                  <tr>
                       <th></th>
                    <th scope="col">Etudiant</th>
                    <th scope="col" style="{position:center;}">Description</th>
                    <th scope="col">Classe</th>
                   
					<th></th>
					<th></th>
                   
                  </tr>
                </thead>
                <tbody>
				<?php
				foreach($listeReponse as $response){
			?>
                  <tr>
                  <td><?php echo $response['id']; ?></td>
                    <td class="tm-product-name"><?php echo $response['etudiant']; ?></td>
                    <td><?php echo $response['description']; ?></td>
                    <td><?php echo $response['classe']; ?></td>
                    
                   
                  </tr>
                  
				  <?php
				}
			?>
                  
                 
                 
                </tbody>
              </table>
            </div>
            <!-- table container -->
			<a
              href="afficherquestionB.php"
              class="btn btn-primary btn-block text-uppercase mb-3">return to Question</a>




	
			</div>
		</div>
	</div>



