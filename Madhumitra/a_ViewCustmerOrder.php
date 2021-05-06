<?php
 include "header.php";
 include "dbi.php";

 if(isset($_POST["from_date"]) && isset($_POST["to_date"]))
{
	$from_date = $_POST["from_date"];
	$to_date = $_POST["to_date"];
}
else if($_SERVER["REQUEST_METHOD"]=='GET')
{
	$from_date = date('Y-m-d');
	$to_date =  date('Y-m-d');
}
//print_r($_SERVER);
$query = "SELECT * FROM customerorder  
          WHERE order_date BETWEEN '$from_date' AND '$to_date'  ";  

$result = mysqli_query($con,$query) or die(mysqli_error($con));	

$query1 = "SELECT itemname,SUM('qty'),unit FROM customerorder 
	   WHERE order_date BETWEEN '$from_date' AND '$to_date' group by 'itemname','unit' ";

$result1 = mysqli_query($con,$query1) or die(mysqli_error($con));	

 ?>  


<div class="container">
<form action="a_ViewCustmerOrder.php" method="post">

		<div class="col-md-3">  
                     <input type="text" name="from_date" id="from_date" value="<?php echo $from_date; ?>" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-3">  
                     <input type="text" name="to_date" id="to_date" value="<?php echo $to_date; ?>" class="form-control" placeholder="To Date" />  
                </div>  
                <div class="col-md-5">  
                     <input type="submit" name="btn" id="filter" value="Filter" class="btn btn-info" />  
                </div>  
                <div style="clear:both"></div>                 
 <br />  
</form>

<div id="order_table">                 
<div class="table-responsive">
<table class="table table-striped table-bordered">   
                               <tr>
				    <td width="10%">Sr No</td>    
                                    <td width="10%">ItemName</td>  
				    <td width="12%">Quantity</td>
				    <td width="12%">Unit</td>				    
                               </tr>
	<?php
	$cnt=0;    
	while($row=mysqli_fetch_array($result1))
	{	
	$cnt++;
	echo "<tr class='info'>";

	echo "<td>$cnt</td>";
	echo "<td>".$row["itemname"]."</td>";
	echo "<td>".$row["qty"]."</td>";
	echo "<td>".$row["unit"]."</td>";
	
	echo "</tr>";
	}

	//mysqli_close($con);
	?>
</table></div></div>


<div id="order_table">                 
<div class="table-responsive">
<table id="stud_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td width="5%">Sr no</td>  
                                    <td width="5%">OrderId</td>  
                                    <td width="20%">OrderDate</td>  
                                    <td width="30%">CustomerName</td>  
                                    <td width="10%">ItemName</td>  
				    <td width="12%">Unit</td>
				    <td width="12%">Quantity</td>
				    
                               </tr>  
                          </thead>
	<?php
	$cnt=0;
    
	while($row=mysqli_fetch_array($result))
	{
	
	$cnt++;
	$id=$row["order_id"];
	
	echo "<tr class='info'>";

	echo "<td>$cnt</td>";
	echo "<td>".$row["order_id"]."</td>";
	echo "<td>".$row["order_date"]."</td>";
	echo "<td>".$row["customer_name"]."</td>";
	echo "<td>".$row["itemname"]."</td>";
	echo "<td>".$row["unit"]."</td>";
	echo "<td>".$row["qty"]."</td>";
	
	echo "</tr>";
	}

	mysqli_close($con);
	?>
</table></div></div></div>

	<div class="well text-center" >
	<a href="admin.php" class="btn btn-sm btn-primary">Back To Panel</a>
	</div>

<script>  
$(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
            
      });  
 </script>
<?php
 
	include "footer.php";
 ?>  
