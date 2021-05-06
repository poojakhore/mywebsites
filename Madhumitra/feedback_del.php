<?php
include "header.php";
?>
<?php

$fid= $_GET["fid"];

require "dbi.php";


$query="select * from feedback where fid=$fid";

$result=mysqli_query($con,$query) or die(mysqli_error($con));

if($row=mysqli_fetch_array($result))
{
	$name=$row["name"];
}
else
{
	echo "<center><h2>Feedback Not Found</h2>";
	echo "<p><a href='feedback_list.php'>Back to List</a></p></center>";
	exit;
}

?>

<center>
<p><a href='feedback_list.php'>Back to List</a></p>

<form action="feedback_delete.php" method="post">

<?php
	echo "<h2 style='color:red'>Delete Feedback: $name @ FID: $fid</h2>";
	echo "<h2>Are You Sure?</h2>";

?>

<input type="hidden" name="fid" value="<?php echo $fid; ?>" />


<input type="submit"  class="btn btn-danger btn-block" value="Confirm Delete"/>

</form>
</center>
<?php
include "footer.php";
?>
