<!DOCTYPE html>
<html  lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="homepage.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<!-- google  font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">

</head>
<body>

	<?php include("header.php"); ?>

	<!-- slider -->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="images/person1.jpg" class="d-block w-100" alt="person1">
	    </div>
	    <div class="carousel-item">
	      <img src="images/person2.jpg" class="d-block w-100" alt="person2">
	    </div>
	    <div class="carousel-item">
	      <img src="images/person3.jpg" class="d-block w-100" alt="person3">
	    </div>
	  </div>
	</div>
	<!-- slider -->

	<div class="container-fluid about">
	<h1>ABOUT US</h1>
	<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
	incididunt ut labore et dolore magna aliqua.</p>


	<div class=" container explain">
	  <div class="row">
	     <div class="col-6">
	       <p class="about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis feugiat sem. Proin sed blandit lectus. Curabitur luctus molestie nibh, ornare commodo dui tincidunt sed. Maecenas magna risus, varius vitae quam egat, bibendum eleifend dui. Aliquam fringilla dignissim velit, sit amet lobortis elit euismod in. Aenean iaculis ex sagittis ornare tincidunt. Quisque erat elit,congue eget nisl ut, accumsan dapibus dui. Morbi sodales libero tellus, ac aliquet ligula aliquet ut.</p>
	     </div>

	     <div class="col-6">
	       <video width="500" height="300" controls>
	         <source src="videos/vodafone.mp4" type="video/mp4">
	       </video>
	     </div>

	   </div>
	</div>
	<!-- end of explain inner div -->
	</div>
	<!-- end of about -->

	<!-- secondary school -->
	<div class="container-fluid secondary">

		<div class="row">
		   <div class="col-6">
		   	<div class="myImage">
		   	<img src="images/child.jpg" class="img-fluid" alt="Responsive image">
		   		
		   	</div>
		   </div>

		   <div class="col-6">
		   	<article>
		   		<h5>In primary school</h5>
		   		<h3>For all ages and abilities right up to A-Level</h3>
		   		<p class="kids">MyMaths offers everything you need to teach mathematics, enthuse today’s students, and provide a strong foundation for other maths-related subjects.</p>
		   	</article>
		   </div>
		 </div>
		
	</div>
	<!-- secondary school -->

	<div class="container-fluid quote">

		<h3>It motivates the less able and offers real<br> challenge to the high-flyers.</h3>
		<p class="school">Boa-Amponsem Senior High School,Dunkwa-On-Offin</p>
		
	</div>


	

	<!-- display all subject -->
	<div class="container-fluid all-subjects">

		<div class="row">
		   <div class="col-6">
		   	<article>
		   		<h2>View all subjects</h2>
		   		<p>Maths, English, Science and more... We've got you.</p>
		   		<a href=""><button type="button" class="default">View all  subjects<span><i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></span></a>
		   		</button>
		   	</article>
		   </div>

		   <div class="col-6">
		   	<div  class="image_div">
		   	<img src="images/book.jpg" class="img-thumbnail" alt="Responsive image">
		   		
		   	</div>
		   	
		   </div>

		 </div>
		<!-- end of row -->
	</div>
	<!-- display all subject -->

	
	<!-- subscribe -->
	<div class="subscribe mx-auto text-center" id="news">

	  <h3>SUBSCRIBE TO OUR <b>NEWSLETTERS</b></h3>
	  <br>
	  <input type="text" name="" placeholder="type your email" id="email"> <button class="sub">Submit</button>
	</div>
	<!-- subscribe -->

	<!-- footer -->
	<?php include("footer.php"); ?>
	<!-- footer -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

</body>
</html>





