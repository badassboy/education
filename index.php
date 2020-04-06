<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>

<!-- header -->

<?php include("nav.php"); ?>

<!-- header -->

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

<div  class="container-fluid image">
    <div class="overlay">
    <div class="name mx-auto text-center" id="name">
      <img src="images/passport.png"   class="img-fluid"  id="circle">
      <p><strong>John Doe</strong></p>
      <p>Graphic Designer</p>



      <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>

  </div>
  
</div>
<!-- end of testimonial -->

<div class="subscribe mx-auto text-center" id="news">

  <h3>SUBSCRIBE TO OUR <b>NEWSLETTERS</b></h3>
  <br>
  <input type="text" name="" placeholder="type your email" id="email"> <button class="sub">Submit</button>
</div>
<!-- end of subscription -->

<!-- footer -->
<footer class="footer">
<div class="container bottom_border">
<div class="row">
<div class=" col-sm-4 col-md col-sm-4  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
<!--headin5_amrc-->
<p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
<p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
<p><i class="fa fa-phone"></i>  +91-9999878398  </p>
<p><i class="fa fa fa-envelope"></i> info@example.com  </p>


</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="about_us.html">About Us</a></li>
<li><a href="faq.html">FAQ's</a></li>
<li><a href="">Register Now</a></li>
<li><a href="contact.html">Contact Us</a></li>
<li><a href="expert.html">Experts Team Members</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="http://webenlance.com">Remove Background</a></li>
<li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
<li><a href="http://webenlance.com">Logo Design</a></li>
<li><a href="http://webenlance.com">Vectorization</a></li>
<li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
<li><a href="http://webenlance.com">Image Cropping</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
<!--headin5_amrc ends here-->

<ul class="footer_ul2_amrc">
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
</ul>
<!--footer_ul2_amrc ends here-->
</div>
</div>
</div>



<!-- </div> -->

</footer>
<!-- footer -->

  

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>