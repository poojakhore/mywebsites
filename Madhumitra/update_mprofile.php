<?php
include "header.php";
include "dbi.php";

$fullname=$_POST["fullname"];
$contact=$_POST["contact"];
$address=$_POST["address"];
$delivery=$_POST["delivery"];
$udt=date("Y-m-d");

	mysqli_query($con,"update member_profile set fullname='$fullname',contact='$contact',address='$address',delivery='$delivery',udate='$udt' where m_uname='$uname'");

if(mysqli_affected_rows($con) > 0)
{
	echo "<div class='well text-center'><h2 style='color:green'>Success: Profile Updated !</h2>";
	echo "<p><a href='member.php'>Back To panel</a></p></div>";
}
include "footer.php";
?>
