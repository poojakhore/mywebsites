<?php
include "header.php";

$itemid=$_POST["itemid"];
$iname=$_POST["iname"];
$icategory=$_POST["icategory"];
$iunit=$_POST["iunit"];
$iprice=$_POST["iprice"];
$istatus=$_POST["istatus"];

include "dbi.php";

$iname=strtoupper($_POST["iname"]);

$query="update item_master set iname='$iname',icategory='$icategory',iunit='$iunit',iprice=$iprice,istatus='$istatus' where itemid=$itemid";

mysqli_query($con,$query) or die(mysqli_error($con));

if(mysqli_affected_rows($con) > 0)
{	
	echo "<div class='well text-center'>";
	echo "<a href='a_item_list.php'><b>Back To List</b></a>";
	echo "</div>";
}
else
{
	echo "<div class='well text-center'>";
	echo "<a href='a_item_list.php'><b>Back To List</b></a>";
	echo '<script> alert("Data Not Updated"); </script>';
	echo "</div>";
}
include "footer.php";

?>