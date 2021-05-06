<?php
include "header.php";
?>
<style>
body{
	margin: 0;
	padding: 0;
	background : url(images/gradient.jpeg); 
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
}
</style>

<?php

include "dbi.php";
$itemid= $_GET["itemid"];

$query="select * from item_master where itemid=$itemid";

$result=mysqli_query($con,$query) or die(mysqli_error($con));

if($row=mysqli_fetch_array($result))
{
	$iname=$row["iname"];
	$icategory=$row["icategory"];
	$iunit=$row["iunit"];
	$iprice=$row["iprice"];
	$istatus=$row["istatus"];
}
else
{
	echo "<center><h2>Item Not Found</h2>";
	echo "<p><a href='a_item_list.php'>Back To List</a></p></center>";
	exit;
}
mysqli_close($con);
?>
<div class="container">

	

	<div class="table-responsive">
	<table class="table table-hover table-bordered table-striped">
	<center>
	
	<form action="a_update_item.php" method="post">
	
	<input type="hidden" name="itemid" value="<?php echo $itemid; ?>"/>
	
	<tr><td colspan="2" align='center'><b>EDIT ITEM</b></td></tr>

	<tr><td>Item Name</td>
	<td><input type="text" name="iname" value="<?php echo $iname; ?>"</td></tr>

	<tr><td>Item Category</td>
	<td>
	<select class="form-control "  name="icategory" value="<?php echo $icategory; ?>">
			<option <?php echo ($icategory=='Vegetables')?'selected':''; ?>>Vegetables</option>
			<option <?php echo ($icategory=='Fruits')?'selected':''; ?>>Fruits</option>
			<option <?php echo ($icategory=='Sprouts')?'selected':''; ?>>Sprouts</option>
			<option <?php echo ($icategory=='Other')?'selected':''; ?>>Other</option>
	</select>
	</td></tr>

	<tr><td>Item Unit</td>
	<td><select class="form-control "  name="iunit" value="<?php echo $iunit; ?>">
			<option <?php echo ($iunit=='Gram')?'selected':''; ?>>Gram</option>
			<option <?php echo ($iunit=='Kg')?'selected':''; ?>>Kg</option>
			<option <?php echo ($iunit=='No')?'selected':''; ?>>No</option>
			<option <?php echo ($iunit=='Dozen')?'selected':''; ?>>Dozen</option>
	</select>
	</td></tr>

	<tr><td>Item Price</td>
	<td><input type="text" name="iprice" value="<?php echo $iprice; ?>"</td></tr>

	<tr><td>Is Available</td>
	<td>
	<select class="form-control " name="istatus" value="<?php echo $istatus; ?>">
			<option <?php echo ($istatus=='Y')?'selected':''; ?>>Y</option>
			<option <?php echo ($istatus=='N')?'selected':''; ?>>N</option>
	</select>
	</td></tr>	

	<tr><td colspan="2" align='center'>
	<input type="submit" class="btn btn-success btn-block"  value="Update Item" />
	</td></tr>

	</table>

	<div class="well text-center" >
		<a href="a_item_list.php" class="btn btn-sm btn-info">Back To Item List</a>
	</div>
	

</div>
</div>
</center>
</form>

<?php
include "footer.php";
?>