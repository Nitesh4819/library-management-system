<!DOCTYPE html>
<?php session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
 
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


<!--<script src="js/jquery.min.js" ></script>
<script src="js/propper.min.js"></script>-->
</head>
<body>
    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark">
    
    <div class="container-fluid"   >
	<div class="navbar-header">
	<a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
	 </div>
	
	
	<div class="dropdown" style="float:left; margin-left:800px;" >
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
    My Profile
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item"  href="view.php">view profile</a></li>
    <li><a class="dropdown-item" href="">Edit profile</a></li>
    <li><a class="dropdown-item" href="">Change Password</a></li>
 	
  </ul>
</div>

<div>
<ul>
<li class="nav-item" >
<a class="nav-link" href="logout.php">LOGOUT</a>
</li></ul>
</div>
	
	</div>
    
    </nav>
	<br>
	<span><marquee>This is library management system library open at 8:30 AM close 6:30 pm</marquee></span>
	<br><br>
	<div class=""></div>
	
	
</body>
</html> 