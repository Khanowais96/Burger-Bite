<?php 
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	
</head>
<style>
.head{
	background:  #e67300;
	padding: 5px 0;
}
.socialicon{margin-right: 5px}
.contact{color: white}
.mymenu{margin-top: 27px}
.cont{margin-top: 30px}
.courses{background: radial-gradient(circle, #009cde, #003087); padding: 25px 0; margin-top: 20px}
.courses h1{color: white;}
.r2 {margin-top: 20px}
.footer{background:black; padding: 20px 0;}
.footer p{color: white; margin: 10px 0}
.footer{color: white}
.footer ul{list-style: none; margin: 0;padding: 0}
.footer ul li a{color: white; font-size: 15px}
.footer{margin-top: 5px}
 .carousel-inner img {
      width: 100%;
      height: 100%;
  }


</style>
<body>

<div class="container-fluid head" >
	<div class="container" >
		<div class="row">
			<div class="col-sm-6 ">
				<a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook" class="socialicon"><i class="fa fa-facebook" style="font-size: 17px; color: white"></i></a>
				<a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter" class="socialicon"><i class="fa fa-twitter" style="font-size: 17px; color: white" ></i></a>
				<a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube" class="socialicon"><i class="fa fa-youtube-play" style="font-size: 17px; color: white"></i></a>
				<a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus" class="socialicon"><i class="fa fa-google-plus" style="font-size: 17px; color: white"></i></a>
			</div>
			<div class="col-sm-6  text-right contact">
				<span class="fa fa-envelope-square "></span> burgerbite@gmail.com,
				<span class="fa fa-phone"></span> +920000001
			</div>
		</div>
	</div>
</div>
<!--end of first container-->

<div class="container">
	<div class="row">
		

		<div class="col-sm-5 "><img src="images/bbb3.png" class="img-responsive" >
		</div>

		<div class="col-sm-7 mymenu " >
			<nav class="navbar navbar-expand-sm bg-light">
			<ul  class="navbar-nav ">
				<li class="nav-item"><a class="nav-link" href="#">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Services</a></li>
				<li class="nav-item"><a class="nav-link" href="pro.php">Products</a></li>
				<li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
				<li class="nav-item"><a class="nav-link" href="login.php">Login </a></li>
			</ul>
			</nav>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
		<div id="demo" class="carousel slide" data-ride="carousel" >
			 <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>




			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/bg2.jpeg"  >
				</div>

				<div class="carousel-item">
					<img src="images/bgg.jpg"  >
				</div>

				<div class="carousel-item">
					<img src="images/bgg2.jpg"  >
				</div>
			</div>
		</div>


		<a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a></div>
		<!-- <img class="img-responsive" src="images/bg2.jpeg" width="100%" > -->
		<div class="col-sm-1"></div>
	</div>
</div>


<div class="container cont" >
	<div class="row">
		<div class="col-sm-8 " ><h2>Welcome to Website</h2>
			<pre>
Lorem ipsum dolor sit amet, consecteturadipisicing elit, sed do eiusmod 
adipisicing elit, sed do eiusmod adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna adipisicing elit, sed do eiusmod
aliqua. Ut enim ad minim veniam,adipisicing elit, sed do eiusmod
quis nostrud exercitation ullamco adipisicing elit, sed do eiusmod 
laboris nisi ut aliquip ex ea commodo adipisicing elit, sed do eiusmod
consequat. Duis aute irure dolor in adipisicing elit, sed do eiusmod 
reprehenderit in voluptate velit esse adipisicing elit, sed do eiusmod
cillum dolore eu fugiat nulla pariatur.adipisicing elit, sed do eiusmod 
Excepteur sint occaecat cupidatat non adipisicing elit, sed do eiusmod
proident, sunt in culpa qui officia deserunt adipisicing elit, sed do eiusmod 
mollit anim id est laborum.</pre>

		</div>
		<div class="col-sm-4 ">
			<img src="images/fastfood.jpg" width="110%" height="90%">
		</div>
	</div>
</div>


<div class="container-fluid courses"  >
	<div class="container">
		<h1 class="text-center">Our Food</h1>
		<div class="row">
			<div class="col-sm-3 col-6"><img src="images/a1.png" class="img-responsive img-thumbnail" ></div>
			<div class="col-sm-3 col-6"><img src="images/b.jpg" class="img-responsive img-thumbnail" ></div>
			<div class="col-sm-3 col-6"><img src="images/ci.jpg" class="img-responsive img-thumbnail" ></div>
			<div class="col-sm-3 col-6"><img src="images/d.jpg" class="img-responsive img-thumbnail"  ></div>
		</div>
		<div class="row r2" >
			<div class="col-sm-3 col-6"><img src="images/e.jpg" class="img-responsive img-thumbnail" ></div>
			<div class="col-sm-3 col-6"><img src="images/fi.png" class="img-responsive img-thumbnail" ></div>
			<div class="col-sm-3 col-6"><img src="images/gi.jpg" class="img-responsive img-thumbnail" ></div>
			<div class="col-sm-3 col-6"><img src="images/h.jpg" class="img-responsive img-thumbnail" ></div>
		</div>
	</div>

</div>


<div class="container">
	
		<h2 class="text-center">Our Team</h2>
	
	

	<div class="row">
	<div class="col-sm-4">
		
		<div class="card">
		<img class="card-img-top" src="images/c2.jpg" alt="Card image">
		<div class="card-body">
		 <h4 class="card-title">Jack</h4>
			
			<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			</p>
			<a href="#" class="btn btn-primary">See Profile</a>
			<a href="#" class="btn btn-primary">Send Email</a>
			</div>
		</div>
	</div>
	

	<div class="col-sm-4 ">
		<div class="card">
		<img class="card-img-top" src="images/c2.jpg" alt="Card image">
		<div class="card-body">
		 <h4 class="card-title">Steve</h4>
			
			<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			</p>
			<a href="#" class="btn btn-primary">See Profile</a>
			<a href="#" class="btn btn-primary">Send Email</a>
			</div>
		</div>
			
		</div>

	<div class="col-sm-4">
		<div class="card">
		<img class="card-img-top" src="images/c2.jpg" alt="Card image">
		<div class="card-body">
		 <h4 class="card-title">Smith</h4>
			
			<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			</p>
			<a href="#" class="btn btn-primary">See Profile</a>
			<a href="#" class="btn btn-primary">Send Email</a>
			</div>
		</div>

	</div>
	</div>	
</div>

	<div class="container-fluid footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-4"><img src="images/bbb3.png" class="img-responsive">
				<p>Lorem ipsum dolor sit amet, consectetur 
				adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna 
				aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco. 
 
	</p>
	<p><a href="#" class="btn btn-warning">Read more</a></p>

				</div>
				<div class="col-sm-4">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">&raquo; Home</a></li>
						<li><a href="#">&raquo; About Us</a></li>
						<li><a href="#">&raquo; Services</a></li>
						<li><a href="#">&raquo; Products</a></li>
						<li><a href="#">&raquo; Contact Us</a></li>
					</ul>
				</div>
				<div class="col-sm-4">
					<h4>Contact Detail</h4>
					<p>Address: Gulshan-e-Iqbal</p>
					<p>Email: burgerbite@gmail.com</p>
					<p>Phone No: +920000001</p>
				</div>
			</div>
		</div>

	</div>


<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>


</body>
</html>