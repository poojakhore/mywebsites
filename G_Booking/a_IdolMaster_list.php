<?php
include "header.php";
include "dbi.php";

$filter = isset($_POST["filter"])?$_POST["filter"]:"";
$btn = isset($_POST["btn"])?$_POST["btn"]:"";

if(empty($filter) || $btn=="Show All")
{
	$query="select * from v_ganpati_master order by pid";
	$filter="";
}
else
{
	$query="select * from v_ganpati_master where pname like '%$filter%' order by pid";
}

$result = mysqli_query($con,$query) or die(mysqli_error($con));
echo "<center>";

echo "<p><a href='a_new_ganpati.php'>NEW IDOL ENTRY</a></p>";

?>

<div class="container">
	<form action="a_IdolMaster_list.php" method="post">
	<center>
		<div class="well text-center" >
			Search Product : <input type="text" name="filter" value="<?php echo $filter; ?>" /> 
			<input type="submit" class="btn btn-sm btn-success" value="Filter" name="btn" />&nbsp;
			<input type="submit" class="btn btn-sm btn-success" value="Show All" name="btn" />
		</div>
	</center>
	</form>
<div class="table-responsive">
	<table id="stud_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Sr no</td>  
                                    <td>Dcode</td>  
                                    <td>Murtikar Name</td>  
                                    <td>Patern</td>  
                                    <td>Size</td>  
				    <td>Rate</td>
				    <td>Quantity</td>
				    <td>Description</td>
				    <td>Action</td>
				    <td>Image</td>
                               </tr>  
                          </thead>  
	<?php
	$cnt=0;
	while($row=mysqli_fetch_array($result))
    {
	$cnt++;
	$id=$row["dcode"];
	
	echo "<tr class='success'>";
	echo "<td align='center'>$cnt</td>";
	echo "<td>&nbsp;".$row["dcode"]."</td>";
	echo "<td>&nbsp;".$row["fullname"]."</td>";

	echo "<td>&nbsp;".$row["pname"]."</td>";
	echo "<td>&nbsp;".$row["size"]."</td>";
	echo "<td>&nbsp;".$row["rate"]."</td>";
	echo "<td>&nbsp;".$row["qty"]."</td>";
	echo "<td>&nbsp;".$row["description"]."</td>";

	echo "<td>";
	echo "&nbsp;<a href='a_edit_ganpati.php?dcode=$id'>Edit</a>";
	echo "&nbsp;<a href='a_del_ganpati.php?dcode=$id'>Delete</a>";
	echo "</td>";
	
	echo "<td>";
	echo "<a href='file_upload.php?dcode=$id'><img src='images/pic$id.png' width='45px' /></a>";
	echo "</td>";
	echo "</tr>";
   }
	mysqli_close($con);
	?>
</table>
</div>
</div>

<div class="well text-center" >
	<a href="a_pattern_list.php" class="btn btn-sm btn-success">Pattern List</a>&nbsp&nbsp
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