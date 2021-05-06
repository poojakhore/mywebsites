<?php
include "header.php";
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
.btn-outline-success:hover
	{
	color:#fff;
	background-color:#198754;
	border-color:#198754
	}
</style>

<div class="panel panel-info" style="max-width:300px;margin:auto">

	<div class="panel-heading"><i class="glyphicon glyphicon-log-in">  </i> Please Login </div>

	<div class="panel-body panel-center">

		<form class="form" action="act_login.php" method="post">
		
			<label for="nameField">UserName:</label><br>
			<div class="input-group">		
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			<input type="text" class="form-control input-sm" name="uname" required placeholder="User Name" autocomplete="off" />
			</div>
			
			<label for="passwordField">Password:</label>
			<div class="input-group">		
			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			<input type="password" class="form-control" name="pwd" required placeholder="Password" />
			</div>
			<br>
			<input type="submit" class="btn-outline-success btn btn-block"  value="Login"  /> 
			
		</form>
	</div>

	<div class="panel-footer btn-link text-center">
		<a href="register.php">Register Member</a>			
	</div>
</div>


<?php
include "footer.php";
?>



