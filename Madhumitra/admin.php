<?php
include "header.php";

require "validate_admin.php";
?>

<h1 style="color:Tomato">Welcome Admin</h1>
  <div class="list-group">

	<a href="#" class="list-group-item">Update My Profile</a>	
	<a href="a_item_list.php" class="list-group-item">View Item Master List</a>
	<a href="a_sales_master.php" class="list-group-item">Current Items for Sale</a>
	<a href="a_ViewCustmerOrder.php" class="list-group-item">View Customer Order</a>	
	<a href="feedback_list.php" class="list-group-item">Feedback List</a>

  </div>
<?php
include "footer.php";
?>




