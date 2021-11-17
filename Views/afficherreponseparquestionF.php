<?php
include 'headerFront.php';
include '../Controller/ReponseController.php';
	$reponseC=new ReponseController();
	$listeReponse=$reponseC->afficherReponseParQuestion($_GET["id"]); 
?>

<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(Front/images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Our Responses</h1>
									<h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Responses</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
            <?php
				foreach($listeReponse as $response){
			?>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(Front/images/project-1.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Etudiant : <?php echo $response['etudiant']; ?></a></h3>
							<p> La reponse  :<?php echo $response['description']; ?></p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course"><?php echo $response['classe']; ?></a></span>
						</div>
					</div>
				</div>
				
                <?php
				}
			?>		
				
				
				
			</div>
		</div>
	</div>
