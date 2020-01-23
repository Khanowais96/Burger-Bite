<?php 
session_start();



 ?>



<html>
<head lang="en">
    <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Login</title>
</head>
<style>
    .card{

    
        margin-top: -20px;


 }   

    body{    background: url(images/bur.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    padding-top: 200px;
    padding-bottom: 140px;}

</style>

<body>

<div class="container ">
    <div class="row">
        <div class="col-4">
            <div class="card">
                
                <div class="card-header bg-primary ">

                    <h3 style="color: white">Sign In</h3>
                </div>
                
                <div class="card-body">
                    <form role="form" method="post" action="login.php">
                      
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Name" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>

                            <div class="form-group">
                                <a href="registration.php" >Register Now</a>
                            </div>


                            <input class="btn btn-lg btn-success btn-block " type="submit" value="login" name="login" >


                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<script type="text/javascript" src="js/bootstrap.js"></script>


</body>


</html>

<?php

include("db.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";

    $run=mysqli_query($conn,$check_user);

    if(mysqli_num_rows($run))
    {
         echo "<script>window.open('index.php','_self')</script>";

        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>