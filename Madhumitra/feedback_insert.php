<?php
require "dbi.php";

$name=$_POST["name"];
$contact=$_POST["contact"];
$comment=$_POST["comment"];
$udate=date("y-m-d");


$query="insert into feedback(name,contact,comment,udate) values('$name','$contact','$comment','$udate')";

mysqli_query($con,$query) or die(mysqli_error($con));

if(mysqli_affected_rows($con) > 0)
{
	header("location:index.php");
}

?>