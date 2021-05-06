<?php
include "header.php";
include "dbi.php";
$query0="select * FROM member_profile WHERE m_uname='$uname'";

$result0 = mysqli_query($con,$query0) or die(mysqli_error($con));
$cust_name='';

if($row=mysqli_fetch_array($result0))
{
               $cust_name=$row["fullname"];
	
}

$query1="select max(order_date) FROM customerorder WHERE customer_name='$cust_name'";

$result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
$dt='';

if($row=mysqli_fetch_array($result1))
{
               $dt=$row[0];
	$query2="SELECT * FROM customerorder WHERE customer_name='$cust_name' and order_date = '$dt'";
}

	
if(empty($dt))
$dt=date('Y-m-d');
?>

<div class="container">
<div class="panel panel-info">
	<div class="panel-heading"> <i class="glyphicon glyphicon-plus-sign"></i> Latest Order </div>

<div class="panel-body panel-center">

	<form class="form-horizontal">

	<div class="form-group">
		<label for="orderDate" class="col-sm-2 control-label">Latest Order Date</label>
		<div class="col-sm-10">
			  <input type="text" readonly class="form-control" value= "<?php echo $dt ;?>" name="order_date" autocomplete="off" />
		</div>
	</div>
	
	<div class="form-group">
		<label for="customerName" class="col-sm-2 control-label">Customer Name</label>
		<div class="col-sm-10">
			  <input type="text" readonly class="form-control" value= "<?php echo $cust_name ;?>" name="cust_name" autocomplete="off" />
		</div>
	</div>

<div class="table-responsive">
<table id="stud_data" class="table table-hover table-bordered table-striped">

<?php

include "dbi.php";

$result2 = mysqli_query($con,$query2) or die(mysqli_error($con));

echo "<thead>";
echo "<tr><th>SrNo</th><th>Item Name</th><th>Unit</th><th>Quantity</th></tr>";
echo "</thead>";

$cnt=0;
while($row=mysqli_fetch_array($result2))
{
	
	$cnt++;
	$id=$row["order_id"];

	$odate=$row["order_date"];
	$cname=$row["customer_name"];

	echo "<tr class='info'>";

	echo "<td>$cnt</td>";
	echo "<td>".$row["itemname"]."</td>";
	echo "<td>".$row["unit"]."</td>";
	echo "<td>".$row["qty"]."</td>";
	
	echo "</tr>";
}

echo "</table>";
mysqli_close($con);
?>
	<div class="well text-center" >
		<a href="member.php" class="btn btn-sm btn-success">Back To Panel</a>
	</div>

</form>
</div>
</div>
</div>
</div>

<?php
include "footer.php";
?>

