<?php
include "header.php";

	$itemid= $_POST["itemid"];

	require "dbi.php";

	$query="delete from item_master where itemid=$itemid";

	mysqli_query($con,$query) or die(mysqli_error($con));

if(mysqli_affected_rows($con) > 0)
	{
		echo "<div class='well text-center'>";
		echo "<a href='a_item_list.php'><b>Back To List</b></a>";
		echo "</div>";
	}
include "footer.php";

?>
