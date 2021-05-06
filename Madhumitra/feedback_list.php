<?php
include "dbi.php";
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
<div class="table-responsive">
	<table id="stud_data" class="table table-hover table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Sr no</td>  
                                    <td>Name</td>  
                                    <td>Contact</td>    
                                    <td>Comment</td>  
				    <td>Date</td>
				    <td>Action</td>
                               </tr>  
                          </thead>  
	<?php
		$query="select * from feedback";
		$result = mysqli_query($con,$query) or die(mysqli_error($con));
		$cnt=0;
		while($row=mysqli_fetch_array($result))
		{
	
			$cnt++;
			$id=$row["fid"];
	
			echo "<tr class='info'>";
			echo "<td>$cnt</td>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["contact"]."</td>";
			echo "<td>".$row["comment"]."</td>";
			echo "<td>".$row["udate"]."</td>";
			echo "<td>";
			echo "&nbsp;<a href='feedback_del.php?fid=$id'>Delete</a>";
			echo "</td>";
			echo "</tr>";
		}
		mysqli_close($con);
	?>
	</table>
	</div>
	</div>

<div class="well text-center" >
	<a href="admin.php" class="btn btn-sm btn-primary">Back To Panel</a>
</div>

<?php
include "footer.php";
?>
 