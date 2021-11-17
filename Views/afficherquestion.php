<?php
include 'headerFront.php';
include '../Controller/QuestionController.php';
	$questionC=new QuestionController();
	$listeQuestion=$questionC->afficherQuestions(); 
?>

<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(https://t4.ftcdn.net/jpg/02/71/12/01/360_F_271120192_ZDT2FCxH94akiIsOHwVULWnbNzi8Oagn.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">QUIZ ET NOTES</h1>
									<h2>This Online Site To Help You Learn And Then Take Your Tests At Home </h2>
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
					<h2>QUIZ ET NOTES</h2>
					<p>“Just believe in yourself. Even if you don’t, pretend that you do and, at some point, you will.”</p>
				</div>
			</div>
			<div class="row">

			<?php
				foreach($listeQuestion as $question){
			?>

				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="afficherreponseparquestionF.php?id=<?php echo $question['id']; ?>" class="course-img" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJtg7Y7swrRPMdzzZum1LOPqAKKbdv3lDNWw&usqp=CAU);">
						</a>
						<div class="desc">
							<h3><a href="afficherreponseparquestionF.php?id=<?php echo $question['id']; ?>"><?php echo $question['description']; ?></a></h3>
							<p><?php echo $question['type']; ?></a> </p>
							<p>Cours : <?php echo $question['course']; ?></p>
							<span><a href="ajouterreponseF.php?id=<?php echo $question['id']; ?>" class="btn btn-primary btn-sm btn-course">Répondre </a></a></span>
						
						</div>
					</div>
				</div>
				
				<?php  } ?>
	
			</div>
		</div>
	</div>

	<div id="fh5co-register" style="background-image: url(https://media.istockphoto.com/photos/question-marks-3d-picture-id589553688?k=20&m=589553688&s=612x612&w=0&h=2n-r0vvTJtLQnUTA5dORbZnh2f81j0WnttjekJDuEkk=);">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="date-counter text-center">
					<h2>see notes</h2>
					
					<div class="simply-countdown simply-countdown-one"></div>
					<p><strong>There are no wrong notes </strong></p>
					<p><a href="#" class="btn btn-primary btn-lg btn-reg">See Now!</a></p>
				</div>
			</div>
		</div>
	</div>


