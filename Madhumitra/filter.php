
<?php 
include "header.php";
include "dbi.php";
$cnt=0;

 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $query = "SELECT * FROM customerorder  
                WHERE order_date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  ";  

      $result = mysqli_query($con, $query);  
      
	  echo "<div class='table-responsive'>";
          echo "<table class='table table-bordered table-hover table-striped'>";  
          echo "<tr>  
		     <th width='5%'>Sr No</th>
                     <th width='5%'>ID</th>  
                     <th width='20%'>Order Date</th>  
                     <th width='30%'>Customer Name</th>  
                     <th width='10%'>Item Name</th>  
                     <th width='12%'>Unit</th>  
		     <th width='12%'>Quantity</th>
                </tr>";  
      
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
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
      }  
      else  
      {  
                echo "<tr class='info'>";  
                    echo "<td colspan='7' align='center'>No Order Found</td>"; 
                echo "</tr>";  
      }  
      echo "</table>";  
      echo "</div>";  
 }  
 include "footer.php";
 ?>
