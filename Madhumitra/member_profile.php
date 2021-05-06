<?php
include "header.php";

require "validate_member.php";
?>
<style>
body
	{
	margin: 0;
	padding: 0;
	background-color : #FFF0F5;
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
	}
</style>
<div class="panel panel-primary" style="max-width:300px;margin:auto">
		<div class="panel-heading">
			<center>Member Profile</center>
		</div>

		<div class="panel-body panel-center">
<?php
include "dbi.php";

if(!empty($uname))
{
	$result=mysqli_query($con,"select * from member_profile where m_uname='$uname'");

	if($row=mysqli_fetch_array($result))
	{
		$fullname=$row["fullname"];
		$contact=$row["contact"];
		$address=$row["address"];
		$delivery=$row["delivery"];
		$udt=$row["udate"];
	}
	else
	{
		$fullname=""; $contact=""; $address=""; $delivery=""; $utd="";
	}
}
?>
<form action="update_mprofile.php" method="post">	

<div class="form-group">
<label for="contactField">Full Name</label>
<input type="text" class="form-control input-sm"  value="<?php echo $fullname; ?>" name="fullname" required placeholder="Full name" />
</div>

<div class="form-group">
<label for="contactField">Contact</label>
<input type="text" class="form-control input-sm" value="<?php echo $contact; ?>" name="contact" required placeholder="Contact" />
</div>

<div class="form-group">
<label for="deliveryField">Home Delivery</label>
<select class="form-control" value="<?php echo $delivery; ?>" name="delivery">
		<option <?php echo ($delivery=='Y')?'selected':''; ?>>Y</option>
		<option <?php echo ($delivery=='N')?'selected':''; ?>>N</option>
</select>
</div>

<div class="form-group">
<label for="addressField">Address</label>
<textarea class="form-control input-sm" rows="5"  name="address" required placeholder="Address"><?php echo $address; ?></textarea>
</div>

<div class="form-group">
<label for="nameField">Updated on</label>
<input type="text" readonly class="form-control input-sm" value="<?php echo $udt; ?>"  name="udate" required placeholder="Updated Date" />
</div>


<input type="submit" class="btn btn-warning btn-block" value="Update Profile" /> 
</form>

</div>

	<div class="panel-footer text-center">		
		<a href="member.php">Back To Panel</a>
	</div>
</div>
<?php
include "footer.php";
?>