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
$dcode= $_GET["dcode"];



$query="select * from ganpati_master where dcode='$dcode'";

$result=mysqli_query($con,$query) or die(mysqli_error($con));

if($row=mysqli_fetch_array($result))
{

	$aid=$row["aid"];
	$pid=$row["pid"];
	$rate=$row["rate"];
	$size=$row["size"];
	$qty=$row["qty"];
	$description=$row["description"];
}
else
{
	echo "<center><h2>Product Not Found</h2>";
	echo "<p><a href='a_IdolMaster_list.php'>Back to List</a></p></center>";
	exit;
}
mysqli_close($con);
?>
<div class="container">

<div class="table-responsive">
<table class="table table-hover table-bordered table-striped">

<center>
<p><a href='a_IdolMaster_list.php'>Back to List</a></p>


<form action="a_update_ganpati.php" method="post">
<input type="text" name="dcode" readonly value="<?php echo $dcode; ?>" />
<tr><td colspan="2" align='center'>EDIT IDOL DETAILS</td></tr>


<tr>
<td>Select Name:</td>
<td>
<select name="aid">
<?php
include "dbi.php";

$query="select * from artist_profile";

$result = mysqli_query($con,$query);

while($row=mysqli_fetch_array($result))
{
	$id=$row["aid"];
	$fn=$row["fullname"];

	if($id==$aid)
		echo "<option selected value='$id'>$fn</option>";
	else
		echo "<option value='$id'>$fn</option>";		
}
?>
</select>
</td>
</tr>
<tr>
<td>Select pattern:</td>
<td>
<select name="pid">
<?php
include "dbi.php";

$query="select * from pattern";

$result = mysqli_query($con,$query);

while($row=mysqli_fetch_array($result))
{
	$id=$row["pid"];
	$pn=$row["pname"];

	if($id==$pid)
		echo "<option selected value='$id'>$pn</option>";
	else
		echo "<option value='$id'>$pn</option>";		
}
?>
</select>
</td>
</tr>

<tr>
<td>Rate:</td>
<td><input type="text" name="rate" value="<?php echo $rate; ?>" /></td>
</tr>
<tr>
<td>Size:</td>
<td><input type="text" name="size" value="<?php echo $size; ?>" /></td>
</tr>

<tr>
<td>Qty:</td>
<td><input type="text" name="qty" value="<?php echo $qty; ?>" /></td>
</tr>

<tr>
<td>Description:</td>
<td><input type="text" name="description" value="<?php echo $description; ?>" /></td>
</tr>

<tr><td colspan="2" align='center'>
<input type="submit" class="btn btn-success btn-block"  value="Update"/>
</td>
</tr>
</table>
<p><a href='a_IdolMaster_list.php'>Back To Panel</a></p>

</div>
</div>
</center>
</form>

<?php
include "footer.php";
?>