<?php
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

<div class="panel panel-success" style="max-width:300px;margin:auto">
		<div class="panel-heading">
			Please Login
		</div>

		<div class="panel-body panel-center">
		<form class="form" action="act_login.php" method="post">		

<label for="nameField">UserName:</label><br>
<div class="input-group">		
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			<input type="text" class="form-control input-sm" name="uname" required placeholder="User Name" />
			</div>



<div class="form-group">
<label for="passwordField">Password</label>
<input type="password" class="form-control" name="pwd" required placeholder="Password" />
</div>

<input type="submit" class="btn btn-success btn-block" value="Login" /> 
		</form>
		</div>

		<div class="panel-footer text-center">
			
		<a href="register.php">Register Member</a>
		</div>

</div>

<?php
include "footer.php";
?>




