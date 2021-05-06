<?php
include "header.php";
?>
<?php

$itemid=$_GET["itemid"];

require "dbi.php";

$query = "select * from item_master where itemid=$itemid";

$result=mysqli_query($con,$query) or die(mysqli_error($con));

if($row=mysqli_fetch_array($result))
{
	$iname=$row["iname"];
}
else
{
	echo "<center><h2 style='color:red'>Item Not Found</h2>";
	echo "<p><a href='a_item_list.php'>Back To List</a></p></center>";
	exit;
}
?>
<center>
<p><a href='a_item_list.php'>Back To List</a></p>

<form action="a_delete_item.php" method="post">

<?php 
	echo "<h2 style='color:red'>Delete Item: $iname @ ItemNo: $itemid </h2>";
	echo "<h2>Are you Sure</h2>";
?>
<input type="hidden" name="itemid" value="<?php echo $itemid; ?>" />

<input type="submit" class="btn btn-info btn-block" value="Confirm Delete"/>

</form>
</center>
<?php
include "footer.php";
?>
