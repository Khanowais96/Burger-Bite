
<?php 
session_start();

if (!isset($_SESSION['uname'])) {
    
    header('location: admin_login.php');
}
else
{

   
}




 ?>


<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <style type="text/css">
         .card{
        margin-top:60px;
    }
         body{    background: url(images/in.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;

    }
    .card{border-color: yellow;

    }
    </style>
</head>
<body>



<div class="container ">
    <div class="row">
        <div class="col-sm-10">
            
        </div>
        <div class="col-sm-2">
            <nav class="navbar navbar-expand-sm ">
            <ul  class="navbar-nav ">
                
                <li class="nav-item btn btn-warning"><a class="nav-link" href="view_users.php" style="color: white ">Control Panel</a></li>

               
            </ul>
            </nav>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-4 ">
            <div class="card">
                <div class="card-header bg-info ">
                    <h3 style="color: white">Add Products</h3>
                </div>
                <div class="card-body">
                    <form role="form" method="post" action="insert.php" enctype="multipart/form-data"">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Product Name" name="txtname" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Product Price" name="txtprice" type="text" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Product Detail" name="txtdetail" type="text" value="">
                            </div>


                            <div class="form-group">
                                Select Image<input type="file" name="imgFile"  >
                            </div>




                            <input class="btn btn-lg btn-danger btn-block" type="submit" value="ADD" name="btnAdd" >


                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<?php 

 
include "db.php";


if (isset($_POST['btnAdd']))
{
    
    $name=$_POST['txtname'];
    $price=$_POST['txtprice'];
    $detail=$_POST['txtdetail'];


    
    $targetpath='images/'.basename($_FILES['imgFile']['name']);

    if(move_uploaded_file($_FILES['imgFile']['tmp_name'],$targetpath ))
    {
            $q="INSERT INTO `products`( `pname`, `pprice`,`pdetail`, `pimg`) VALUES ('$name',$price,'$detail','$targetpath')";

            
    $result=mysqli_query($conn,$q);
    if ($result) {
        echo "<script>alert('Record added')</script>";
    }
    else
    {
        echo "<script>alert('Error')</script>";
    }

    }
    
}




 ?> 









<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>