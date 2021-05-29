<?php

include "header.php";
include "dbi.php";

$uname=$_POST["uname"];
$pwd=$_POST["pwd"];

$query = "select * from login where uname='$uname' and pwd='$pwd'";

$result = mysqli_query($con,$query) or die(mysqli_error($con));

if($row=mysqli_fetch_array($result))
{
	$role = strtolower($row["role"]);

	$_SESSION["uname"] = $row["uname"];
	$_SESSION["role"] = $role;

	if($role=="member")
		header("location:member.php");	//auto-redirect
	else if($role=="admin")
		header("location:admin.php");
	else
		header("location:index.php");

}
else
{
	echo "<div class='well text-center'>";
	echo "<h3>Invalid Credentials</h3>";
	echo "<p><a href='login.php'>Try Again</a></p>";
	echo "</div>";
}
include "footer.php";
?>