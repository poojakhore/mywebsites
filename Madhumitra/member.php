<?php
include "header.php";

require "validate_member.php";
?>

<h1 style="color:Tomato">Welcome Member</h1>

  <div class="list-group">
	<a href="member_profile.php" class="list-group-item">Update My Profile</a>
	<a href="CustmerOrder.php" class="list-group-item">Place Order</a>	
	<a href="m_view_order.php" class="list-group-item">View Latest Order</a>	
  </div>

<?php
include "footer.php";
?>




