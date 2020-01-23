<?php 
session_start();
if (!isset($_SESSION['email'])) {
    

    header('location: login.php');
    
}


 ?>


<html>
<head>
	<title>Products</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="mystyle.css">



	<style>
.head{
	background:  #e67300;
	padding: 5px 0;
}
.socialicon{margin-right: 5px}
.contact{color: white}
.mymenu{margin-top: 27px}
.footer{background:black; padding: 20px 0;}
.footer p{color: white; margin: 10px 0}
.footer{color: white}
.footer ul{list-style: none; margin: 0;padding: 0}
.footer ul li a{color: white; font-size: 15px}
.footer{margin-top: 5px}


</style>
</head>
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
				<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Services</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Products</a></li>
				<li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
				<li class="nav-item"><a class="nav-link" href="logoutt.php">Logout </a></li>
			</ul>
			</nav>
		</div>
	</div>
</div>



<div class="container">
	<h2 class="text-center" style="color: red">Products</h2>
	<div class="row">

<?php 
include "db.php";

$query="SELECT * FROM products";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($result)) {
	
	$pid=$row[0];
	$pname=$row[1];
	$pprice=$row[2];
	$pimg=$row[4];


echo "
	
		<div class='col-sm-4'>
				<div class='card'>
		<img class='card-img-top' src='$pimg' alt='Card image'>
		<div class='card-body'>
		 <h4 class='card-title'>$pname</h4>
		 <h5 class='card-title'>Price:$$pprice</h5>
			
		<a href='detail.php?det= $pid'  class='btn btn-primary'>
		Detail</a>
			
			<a href='#' class='btn btn-primary'>Add To Cart</a>
			</div>
		</div>
		</div>

";
}

 ?>
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
