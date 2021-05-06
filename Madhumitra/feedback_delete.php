<?php
include "header.php";

$fid= $_POST["fid"];

require "dbi.php";

$query="delete from feedback where fid=$fid";

mysqli_query($con,$query) or die(mysqli_error($con));

if(mysqli_affected_rows($con) > 0)
{
	header("location:feedback_list.php");
}

include "footer.php";
?>