<?php
include "header.php";
include "dbi.php";
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
<div class="table-responsive">
	<table id="stud_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Sr no</td>  
                                    <td>BID</td>  
                                    <td>BDate</td>  
                                    <td>UName</td>  
                                    <td>dcode</td>  
				    <td>pitamber</td>
				    <td>dhoti</td>
				    <td>delivery_status</td>
				    <td>size</td>
				    <td>Qty</td>
				    <td>Rate</td>
				    <td>Total</td>
				    <td>Status</td>
				    <td>Action</td>
                               </tr>  
                          </thead>

	<?php
	$cnt=0;
	$query="select * from booking";
	$result = mysqli_query($con,$query) or die(mysqli_error($con));
	while($row=mysqli_fetch_array($result))
{
	
	$cnt++;
	$id=$row["bid"];
	
	echo "<tr class='success'>";
	echo "<td>$cnt</td>";
	echo "<td>".$row["bid"]."</td>";
	echo "<td>".$row["bdate"]."</td>";
	echo "<td>".$row["uname"]."</td>";
	echo "<td>".$row["dcode"]."</td>";
	echo "<td>".$row["pitamber"]."</td>";
	echo "<td>".$row["dhoti"]."</td>";
	echo "<td>".$row["delivery_details"]."</td>";
	echo "<td>".$row["size"]."</td>";
	echo "<td>".$row["qty"]."</td>";
	echo "<td>".$row["rate"]."</td>";
	echo "<td>".$row["total"]."</td>";
	echo "<td>".$row["status"]."</td>";
	echo "<td>";
	echo "&nbsp;<a href='a_edit_status.php?bid=$id'>Set Status</a>";
	echo "</td>";
	echo "</tr>";
}
	mysqli_close($con);
	?>
</table>
</div>
</div>
	<div class="well text-center" >
	<a href="admin.php" class="btn btn-sm btn-success">Back To Panel</a>
	</div>
<?php
include "footer.php";
?>

<script>  
 $(document).ready(function(){  
      $('#stud_data').DataTable();  
 });  
 </script>  

