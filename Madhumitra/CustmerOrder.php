<?php
include "header.php";
?>

<?php
include "dbi.php";

if(!empty($uname))
{
$result=mysqli_query($con,"select * from member_profile where m_uname='$uname'");

if($row=mysqli_fetch_array($result))
{
	$fullname=$row["fullname"];
}
else
{
	$fullname ="";
}
}
?>

<div class="container">
<h4>"मधुमित्र", सांगली मध्ये दर गुरुवारी रसायनमुक्त भाज्या व फळे मिळतील .<small> कृपया आपली ऑर्डर दर बुधवारी संध्याकाळी ६ पर्यंत ऑनलाइन प्लेस करावी .</small></h4>
<h5>सध्या उपलब्ध अशा भाज्या व फळांची यादी खालील प्रमाणे आहे .<small>ज्या त्या भाजी / फळासमोर आपली ऑर्डर मांडावी व जतन करावी .</small></h5>
<div class="panel panel-info" >

	<div class="panel-heading"> <i class="glyphicon glyphicon-plus-sign"></i> Add Order </div>

<div class="panel-body panel-center">
	
	<form class="form-horizontal" action="insert_CustomerOrder.php" method="post">

	<div class="form-group">
		<label for="orderDate" class="col-sm-2 control-label">Order Date</label>
		<div class="col-sm-10">
			  <input type="text" readonly class="form-control" value= "<?php echo date("y-m-d");?>" name="order_date"  />
		</div>
	</div>
	
	<div class="form-group">
		<label for="customerName" class="col-sm-2 control-label">Customer Name</label>
		<div class="col-sm-10">
			  <input type="text" readonly class="form-control" value= "<?php echo $fullname ;?>" name="customer_name" />
		</div>
	</div>

<div class="table-responsive">
<table id="stud_data" class="table table-hover table-bordered table-striped">

<?php
include "dbi.php";

$query="select * from item_master where istatus='Y' order by itemid";

$result=mysqli_query($con,$query) or die(mysqli_error($con));

echo "<thead>";
echo "<tr>
	<th width='5%'>SrNo</th>
	<th width='10%'>Item Name</th>
	<th width='10%'>Unit</th>
	<th width='20%'>Quantity</th>
	</tr>";
echo "</thead>";

$cnt=0;

while($row=mysqli_fetch_array($result))
{
	
	$cnt++;
	$id=$row["itemid"];

	$nm=$row["iname"];
	$unt=$row["iunit"];

	echo "<tr class='info'>";
	echo "<td>$cnt</td>";

	echo "<td>$nm</td>";
	
	echo "<td>$unt</td>";	

	echo "<td>";
	echo "<input type='text' class='form-control '   name='quantity[]' value='0'  required placeholder='Quantity' />";
	echo "<input type='hidden' name='iname[]' value='$nm' />";
	echo "<input type='hidden' name='iunit[]' value='$unt' />";

	echo "</td>";
	echo "</tr>";
	
}
echo "</table>";
mysqli_close($con);
?>
	<div class="well text-center" >
		<input type="submit" class="btn btn-success "  value="Save Order" />
		&nbsp;&nbsp;<a href="member.php" class="btn btn-primary">Back To Panel</a>
	</div>

</form>
</div>
</div>
</div>
</div>
<?php
include "footer.php";
?>

