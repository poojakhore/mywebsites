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
<div class="container">
	<form action="update_item_status.php" method="POST">
<div class="table-responsive">
	
	<table id="stud_data" class="table table-hover table-bordered table-striped">
	<thead>
	<tr><th>SrNo</th><th>Item Name</th><th>Action</th></tr>
	</thead>
	
<?php
include "dbi.php";

$query="select * from item_master order by itemid";

$result=mysqli_query($con,$query) or die(mysqli_error($con));


$cnt=0;

while($row=mysqli_fetch_array($result))
{
	$cnt++;
	$id=$row["itemid"];
	
	echo "<tr class='info'>";
	echo "<td>$cnt</td>";
	echo "<td>".$row["iname"]."</td>";
	echo "<td>";

	$is=$row["istatus"];
	if($is=='y' || $is=='Y')
	echo "&nbsp;<input type='checkbox' checked name='items[]' value='$id' />";
	else
	echo "&nbsp;<input type='checkbox' name='items[]' value='$id' />";

	echo "</td>";
	echo "</tr>";	
}
mysqli_close($con);
?>
</table>
</form>
	<div class="well text-center" >
	<input type="submit" class="btn btn-success" value="Save Changes"/>
		<!--<button type="button" class="btn btn-success"  value="Save Changes" data-toggle="modal" data-target="#currentSalesModal" >Save Changes</button>-->
		<a href="admin.php" class="btn btn-primary"> Back To panel</a>
	</div>

</div>
</div>
<?php
include "footer.php";
?>

