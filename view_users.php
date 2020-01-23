<?php 
session_start();

if (!isset($_SESSION['uname'])) {
    
    header('location: admin_login.php');
}





 ?>


<html>
<head lang="en">
    <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> <!--css file link in bootstrap folder-->
    <title>View Users</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }
.footer{background:black; padding: 20px 0;}
.footer p{color: white; margin: 10px 0}
.footer{color: white}
.footer ul{list-style: none; margin: 0;padding: 0}
.footer ul li a{color: white; font-size: 15px}
.footer{margin-top: 5px}



</style>

<body>
<div class="container ">
    <div class="row">
        <div class="col-sm-7">
            
        </div>
        <div class="col-sm-5">
            <nav class="navbar navbar-expand-sm ">
            <ul  class="navbar-nav ">
                <li class="nav-item btn btn-dark" style=""><a class="nav-link" href="logout.php" style="color: white">Logout</a></li>
                <li class="nav-item btn btn-dark"><a class="nav-link" href="index.php" style="color: white ">Website</a></li>

                <li class="nav-item btn btn-danger"><a href="insert.php" class="nav-link" style="color: white; ">Insert New</a></li>
            </ul>
            </nav>
        </div>
    </div>
</div>





    <h2 align="center" >All the Users</h2>

<div class="table-responsive">


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>User Id</th>
            <th>User Name</th>
            <th>User E-mail</th>
            <th>User Pass</th>
            <th>Delete User</th>
        </tr>
        </thead>

        <?php
        include("db.php");
        $view_users_query="select * from users";//select query for viewing users.
        $run=mysqli_query($conn,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))
        {
            $user_id=$row[0];
            $user_name=$row[1];
            $user_email=$row[2];
            $user_pass=$row[3];



        ?>

        <tr>

            <td><?php echo $user_id;  ?></td>
            <td><?php echo $user_name;  ?></td>
            <td><?php echo $user_email;  ?></td>
            <td><?php echo $user_pass;  ?></td>
            <td><a href="deletee.php?dell=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> 
        </tr>

        <?php   } ?>


    </table>
        </div>





<h2 class="text-center" style="margin-top: 50px">Product List items</h2>

<div class="container">
	
	<div class="row">

<?php
        include("db.php");
        $view_users_query="select * from products";//select query for viewing users.
        $run=mysqli_query($conn,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $pid=$row[0];
            $pname=$row[1];
            $pprice=$row[2];
            $pimg=$row[4];



echo "
	
		<div class='col-sm-3'>
				<div class='card'>
		<img class='card-img-top' src='$pimg' alt='Card image'>
		<div class='card-body'>
		 <h5 class='card-title'>$pid</h5>
		 <h5 class='card-title'>$pname</h5>
		  <h5 class='card-title'>$$pprice</h5>

			
			
			<a href= 'delete.php?del= $pid'><button class='btn btn-danger'>Delete</button></a>

			<a href='update.php?upd= $pid '><button class='btn btn-danger'>Update</button></a>
			</div>
		</div>
		</div>

";
}

 ?>
 </div>
</div>



    <h1 align="center" >Messages</h1>

<div class="container">
<div class="table-responsive">


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            
            <th>Name</th>
            <th>E-mail</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
        </thead>

        <?php
        include("db.php");
        $view_users_query="select * from messages";//select query for viewing users.
        $run=mysqli_query($conn,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))
        {
            $name=$row[0];
            $email=$row[1];
            $subject=$row[2];
            $message=$row[3];



        ?>

        <tr>

            <td><?php echo $name;  ?></td>
            <td><?php echo $email;  ?></td>
            <td><?php echo $subject;  ?></td>
            <td><?php echo $message;  ?></td>
            
        </tr>

        <?php   } ?>


    </table>
        </div>
        </div>






<div class="container-fluid footer" style="margin-top: 50px">
		<div class="container">
			
				<h1 align="center">Welcome Admin</h1>
			
		</div>

	</div>




















<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>
