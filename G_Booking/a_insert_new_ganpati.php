<?php
include "header.php";
require "dbi.php";

$dcode=$_POST["dcode"];
$aid=$_POST["aid"];
$pid=$_POST["pid"];
$rate=$_POST["rate"];
$size=$_POST["size"];
$qty=$_POST["qty"];
$des=$_POST["des"];


$query="insert into ganpati_master(dcode,aid,pid,rate,size,qty,description) values('$dcode',$aid,$pid,$rate,$size,$qty,'$des')";

mysqli_query($con,$query) or die(mysqli_error($con));

if(mysqli_affected_rows($con) > 0)
{
	header("location:admin.php");
}

?>


