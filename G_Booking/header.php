<?php
session_start();

$uname = isset($_SESSION["uname"])?$_SESSION["uname"]:"";
$role = isset($_SESSION["role"])?$_SESSION["role"]:"Guest";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ganpati Booking</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

	 <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css" /> 

	  
<style>
body{
	margin: 0;
	padding: 0;
	background : url(images/gradient.jpeg); 
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
}

</style>
</head>
<body>
<div class="container">

<div class="navbar navbar-default" style="background: url(images/m1.png);">
	<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>

	<a class="navbar-brand active" href="./pdfs/HowToBook.pdf">How To Book</a>
	</div>
		<div class="collapse navbar-collapse" id="mynavbar-content">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><b>Home</b></a></li>
				
				
				<li><a href="downloads.php"><b>Downloads</b></a></li>
				<li><a href="login.php"><b>Competition</b></a></li>
				
								
				<!--<li class="dropdown">
				  <a href="#" class="dropdown-toggle"  data-toggle="dropdown">Competition<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="login.php">Registration</a></li>
					</ul>
				</li>-->
				

				<!-- Example single danger button -->

				<li><a href="AboutUs.php"><b>About Us</b></a></li>
				<li><a href="contactus.php"><b>Contact Us</b></a></li>			
				
		<?php

		if($role=="admin")
		{
			echo "<li><a href='admin.php'>Admin</a></li>	";
		}
		else if($role=="member")
		{
			echo "<li><a href='member.php'>Member</a></li>	";
		}


		if(empty($uname))
			echo "<li><a style='background:gold' href='login.php'>Login</a></li>	";
		else
		{
			
			echo "<li><a style='background:gold' href='logout.php'>Logout $uname</a></li>	";
		}
		?>
		

			</li>		
				<li><a href="feedback.php"><b>Feedback</b></a></li>
			</ul>	
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col1">
		<div class="thumbnail">
			<img src="images/header1.png" >
		</div>
	</div>

	<!--<div class="col-xs-6 col2">
		<div class="thumbnail">
			<img src="images/title.png">
		</div>
	</div>-->

</div>