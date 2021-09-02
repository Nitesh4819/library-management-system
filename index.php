<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
<link rel="stylesheet" href="css/bootstrap.min.css">

<script src="js/jquery.min.js" ></script>
<script src="js/propper.min.js"></script>
</head>
<body>
    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark">
    
    <div class="container-fluid"   >
	<div class="navbar-header">
	<a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
	
	
	<ul class="nav navbar-right">
	<li class="nav-item">
	<a class="nav-link" href="index.php">Admin Login</a>
	</li>
	
	<a class="nav-link" href="index.php">User Login</a>
	<li class="nav-item">
	</li>
	
	<li class="nav-item ">
	<a class="nav-link" href="signup.php">USER REGISTER</a>
	</li>
	
	</ul>
	 </div>
	
	
	</div>
    
    </nav>
	<br>
	<span><marquee>This is library management system library open at 8:30 AM close 6:30 pm</marquee></span>
	<br><br>
	<div class="row">
	<div class="col-md-4">
	<h5>Library Time</h5>
	<ul>
	<li>Opening Time 8 Am</li>
	<li>Closing Time 6 pm</li>
	<li>(sunday off)</li>	
	</ul>

	
	<h5>What we provied</h5>
	<ul>
	<li>full furniture</li>	
	<li>News papers</li>	
	<li>discussion room</li>	
	<li>Ro water</li>	
	<li>peacefull environment</li>	
	</ul>

	</div>

	<div class="col-md-8" id="main-container">
<centetr> <h3>User Login From</h3> </centetr>

<form action="" method="post">



<div class="form-group">
	Email ID<input type="email" name="email" class="form-control" required >
</div>


<div class="form-group">
	Password<input type="password" name="password" class="form-control" required >
</div>


<input type="submit" value="login" class="btn btn-primary" name="sub">

</form>
    <?php
    session_start();
    if(isset($_POST['sub']))
    {


$e=$_POST["email"];
$p=$_POST["password"];



$connect =mysqli_connect("localhost","root","","library");

$query=" select * from user where sEmail= '$e' AND sPass='$p' ";

 $run=mysqli_query($connect,$query);

 $c=mysqli_num_rows($run);
 if($c>0)
{
$_SESSION['email']=$e;

$_SESSION['pass']=$p;

header("location:user_dashboard.php");
}
else{
	?>
	
	<center><span class="alert-danger">worng password</span></center>

	<?php
	}
	
    }
    ?>

	</div>
	</div>
	
</body>
</html>