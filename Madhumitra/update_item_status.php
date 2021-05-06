<?php
include "header.php";
$items=isset($_POST["items"])?$_POST["items"]:array("0");

$in = implode($items,",");

include "dbi.php";

$query1="update item_master set istatus='Y' where itemid in($in)";
$query2="update item_master set istatus='N' where itemid not in($in)";
 
mysqli_query($con,$query1);
mysqli_query($con,$query2);

echo "<div class='well text-center'><h2 style='color:green'>Success: Items Updated ..!</h2>";
echo "<p><a href='a_sales_master.php'>Back To List</a></p></div>";

include "footer.php";
?>
