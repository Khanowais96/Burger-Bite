<?php 
session_start();

if (!isset($_SESSION['uname'])) {
    
    header('location: admin_login.php');
}
else
{


}

 ?>


<?php

include("db.php");
$update_id=$_GET['upd'];
$update_query="Select * from products WHERE pid='$update_id'";//update query
$run=mysqli_query($conn,$update_query);


$products = array();

while($row = mysqli_fetch_array($run))
{
	$products['p-id'] = $row['pid'];
	$products['p-name'] = $row['pname'];
	$products['p-price'] = $row['pprice'];
	$products['p-detail'] = $row['pdetail'];
	$products['p-img'] = $row['pimg'];

}

if(isset($_POST['update']))
{
	$pid = $_POST['p_id'];
	$name= $_POST['p_name'];
	$price = $_POST['p_price'];
	$detail = $_POST['p_detail'];
	$img=$_POST['p_img'];
	
	 $sql = "UPDATE products set pname = '$name',
	 pprice= '$price', pdetail='$detail', pimg='$img' where pid= '$pid'"; 

	
	 $res = mysqli_query($conn,$sql);
	 if($res)
	{
		echo "<script>alert('Product Updated')</script>";
        
        echo "<script>window.open('view_users.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}



?>


 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<style type="text/css">
		.card{margin-top: 120px}

		 body{    background: url(images/upd.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    }
	</style>
</head>
<body>






<div class="container">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card">
                <div class="card-header bg-primary ">
                    <h3 style="color: white">Update Product</h3>
                </div>
                <div class="card-body">
                    <form role="form" method="post" >
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control"  name="p_id" type="hidden" value="<?php echo $products['p-id'];?>" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control"  name="p_name" type="text" value="<?php echo $products['p-name']; ?>">
                            </div>

                              <div class="form-group">
                                <input class="form-control"  name="p_price" type="text" value="<?php echo $products['p-price']; ?>">
                            </div>


                            <div class="form-group">
                                <input class="form-control" name="p_detail" type="text" value="<?php echo $products['p-detail']; ?>">
                            </div>

                            <div class="form-group">
                                <input class="form-control"  name="p_img" type="text" value="<?php echo $products['p-img']; ?>">
                            </div>

                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Update" name="update" >


                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
	
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>



