<?php
include "header.php";

$uname=$_POST["uname"];
$npwd=$_POST["npwd"];
$cpwd=$_POST["cpwd"];

if(empty($uname) || empty($npwd))
{
	echo "<div class='well text-center'><h2 style='color:red'>Error: UserName/Password Required !</h2>";
	echo "<p><a href='register.php'>Try Again</a></p></div>";
	include "footer.php";
	return;
}

if($npwd!=$cpwd)
{
	echo "<div class='well text-center'><h2 style='color:red'>Password Mismatch..!</h2>";
	echo "<p><a href='register.php'>Try Again</a></p></div>";
	include "footer.php";
	return;
}
require "dbi.php";

$query = "select * from login where uname='$uname'";

$result = mysqli_query($con,$query) or die(mysqli_error($con));

if(mysqli_num_rows($result) > 0)
{
	echo "<div class='well text-center'><h2 style='color:red'>Error: User Already Exists..!</h2>";
	echo "<p><a href='register.php'>Try Again</a></p></div>";
}
else
{
	$query1 = "insert into login(uname,pwd,role) values('$uname','$npwd','member')";

	$query2 = "insert into member_profile(m_uname) values('$uname')";

	mysqli_query($con,$query2) or die(mysqli_error($con));

	mysqli_query($con,$query1) or die(mysqli_error($con));

	if(mysqli_affected_rows($con) > 0 )
	{
		echo "<div class='well text-center'><h2 style='color:green'>Congratulation: You have successfully registered with Madhumitra..!</h2><br>
			<h5 style='color:green'>Please note your login credentials for future use.<br></h5>";
		echo "<div class='well text-center'>UserName : <b> $uname </b> <br> Password: <b> $npwd </b> <br><br>";
		
		echo "<p><a href='login.php'>PROCEED TO LOGIN</a></p></div>";
	}
}

include "footer.php";
?>