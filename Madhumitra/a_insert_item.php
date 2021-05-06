<?php
require "dbi.php";

$iname=$_POST["iname"];
$icategory=$_POST["icategory"];
$iunit=$_POST["iunit"];
$iprice=$_POST["iprice"];
$istatus=$_POST["istatus"];

$query="insert into item_master(iname,icategory,iunit,iprice,istatus) values('$iname','$icategory','$iunit',$iprice,'$istatus')";

mysqli_query($con,$query) or die(mysqli_error($con));

if(mysqli_affected_rows($con) > 0)
{
	header("location:a_item_list.php");
}

?>