<?php
include "header.php";
require "dbi.php";

$order_date=date("y-m-d");
$cname=$_POST["customer_name"];
$items=$_POST["iname"];
$unit=$_POST["iunit"];
$qty=$_POST["quantity"];

$idx=0;
echo "<div class='table-responsive'>";
echo "<table class='table table-bordered'>";
echo "<tr><th>Item</th><th>unit</th><th>Quantity</th></tr>";

echo "<tr class='info'>";
	
	
foreach($items as $item)
{
	
	echo "<td>";
	echo $item." ".$unit[$idx]." ".$qty[$idx]."</br>";
	echo "</td>";
	
	$ut=$unit[$idx];
	$qt=$qty[$idx];

	if($qty[$idx]>0)
	{
		$query="insert into customerorder(order_date,customer_name,itemname,unit,qty) values('$order_date','$cname','$item','$ut','$qt')";
		mysqli_query($con,$query) or die(mysqli_error($con));
	}

	$idx++;
		

}

	echo "</tr>";

echo "</table>";

if(mysqli_affected_rows($con) > 0)
{	
	
	echo "<div class='well well-sm text-center'><h2 style='color:green'>Success: Order Placed..!</h2>";
	echo "<p class='text-info'><b>Home delivery available in Gaonbhag,Stand and Vakharbhag Sangli.</b></p>";
	echo "<p class='text-danger'><b>कृपया आपण आपल्या कापडी पिशव्या आणावेत.  </b></p>";
	echo "<p><a href='member.php'>Back To Member Panel</a></p></div>";	
}
include "footer.php";

?>