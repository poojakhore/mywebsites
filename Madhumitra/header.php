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
	<title>Madhumitra</title>
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css" /> 

	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"> 


<style>
body{
	margin: 0;
	padding: 0;
	background :#FFFFFF; 
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
}

</style>
</head>
<body>
<div class="container">

<div class="navbar navbar-default">
	<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>

	<a class="navbar-brand active" href="index.php"> <span class="label label-primary">Madhumitra</span></a>
	</div>
		<div class="collapse navbar-collapse" id="mynavbar-content">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><b>Home</b></a></li>
					
						
				<li><a href="about.php"><b>About Us</b></a></li>
				<li><a href="contact.php"><b>Contact Us</b></a></li>			
				
				

			</li>		
				<li><a href="feedback.php"><b>Feedback</b></a></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				
				<?php
				if($role=="admin")
				{			
      				echo "<li><a href='admin.php'><span class='glyphicon glyphicon-log-in'></span> Admin</a></li>";
				}
				else if($role=="member")
				{
				echo "<li><a href='member.php'><span class='glyphicon glyphicon-log-in'></span> Member</a></li>	";
				}

				if(empty($uname))
					echo "<li><a  href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>	";
				else
				{
			
				echo "<li><a  href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout $uname</a></li>	";
				}
			?>
				
    			</ul>
	
		</div>
	</div>
</div>
<?php
include "footer.php";
?>
