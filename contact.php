<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<style type="text/css">
		.css{
			margin-top: 100px;
		}
			 body{    background: url(images/in.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    }
    body label{color: white}
	</style>
</head>
<body>

<div class="container">
	<div class="row">
		

		

		<div class="col-sm-2 mymenu " >
			
			
				<a href="index.php" data-toggle="tooltip" data-placement="bottom" title="Facebook" class="socialicon"><i class="fa fa-arrow-circle-left" style="font-size: 50px;color: black; margin-top: 20px"></i></a>
				

			
		</div>
		<div class="col-sm-10 ">
		</div>
	</div>
</div>




<div class="container">
	<h2 class="text-center" style="color: white; margin-top: 20px">CONTACT US</h2>
	<div class="row ">
		
		<div class="col-md-8 mx-auto css">
		
			<form method="POST">
				
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" name="txtname" placeholder="Enter name" required="required" />
                                </div>
                             <div class="form-group">
                            <label for="email">
                                Email Address</label>
                        
                            <input type="email" class="form-control" id="email" name="txtemail" placeholder="Enter email" required="required" />
                        </div>



                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    
                        </div>

                              <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs" name="send">
                            Send Message</button>
                    </div>
						
					
				</div>
			</form>
		</div>
	
	</div>
</div>

<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>

<?php 


include("db.php");

if(isset($_POST['send']))
{

	$name= $_POST['txtname'];
	$email = $_POST['txtemail'];
	$subject = $_POST['subject'];
	$message=$_POST['message'];

$sql="INSERT INTO `messages`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";

$res = mysqli_query($conn,$sql);
if($res)
	{
		echo "<script>alert('Message Sent')</script>";
        
        echo "<script>window.open('contact.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}



 ?>