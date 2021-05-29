<?php

$dcode= $_POST["dcode"];
$aid= $_POST["aid"];
$pid= $_POST["pid"];
$rate= $_POST["rate"];
$size= $_POST["size"];
$qty= $_POST["qty"];
$description= $_POST["description"];

require "dbi.php";



$query="update ganpati_master set aid=$aid, pid=$pid, rate=$rate,size=$size,qty=$qty,description='$description' where dcode='$dcode'";

mysqli_query($con,$query) or die(mysqli_error($con));

if(mysqli_affected_rows($con) > 0)
{
	header("location:a_IdolMaster_list.php");
}

?>