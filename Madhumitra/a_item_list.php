<?php
include "header.php";
?>

<div class="container">
	<div class="well text-center" >
		<a href="a_add_item.php" class="btn btn-sm btn-info">Add Items</a>
	</div>

<div class="table-responsive">
	<table id="stud_data" class="table table-hover table-bordered table-striped">
<?php
include "dbi.php";

$query="select * from item_master order by itemid";

$result=mysqli_query($con,$query) or die(mysqli_error($con));

echo "<thead>";
echo "<tr><th>SrNo</th><th>ItemID</th><th>Item Name</th><th>Category</th><th>Units</th><th>Price</th><th>Is Available</th><th>Action</th></tr>";
echo "</thead>";
$cnt=0;

while($row=mysqli_fetch_array($result))
{
	$cnt++;
	$id=$row["itemid"];

	echo "<tr class='info'>";
	echo "<td>$cnt</td>";
	echo "<td>".$row["itemid"]."</td>";
	echo "<td>".$row["iname"]."</td>";
	echo "<td>".$row["icategory"]."</td>";
	echo "<td>".$row["iunit"]."</td>";
	echo "<td>".$row["iprice"]."</td>";
	echo "<td>".$row["istatus"]."</td>";
	echo "<td>";
	echo "&nbsp;<a href='a_edit_item.php?itemid=$id'>Edit</a>";
	echo "&nbsp;&nbsp;<a href='a_del_item.php?itemid=$id'>Delete</a>";
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
	<div class="well text-center" >
		<a href="admin.php" class="btn btn-sm btn-primary">Back To panel</a>
	</div>	
</div>
</div>
<?php
include "footer.php";
?>