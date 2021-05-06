<?php
include "header.php";
?>
<style>
body
	{
	margin: 0;
	padding: 0;
	background-color : ;
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
	}
</style>
<div class="container">
  <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <center><h4><strong>सूचना !</strong></h4> <h5>MadhuMitra app ची वितरण सेवा  (Delivery Service) फक्त <b>गावभाग, स्टँड आणि वखारभाग सांगली महाराष्ट्र </b>साठी उपलब्ध आहे.<br></h5>
			<h5>आपण सांगलीतून भाजीपाला मागवत नसल्यास आमची टीम  कोणतीही सूचना न देता आपली ऑर्डर रद्द करेल..</h5></center>
  </div>
</div>

<div class="panel panel-primary"  style="max-width:300px;margin:auto">
		
	<div class="panel-heading">  NEW MEMBER REGISTRATION  </div>

	<div class="panel-body panel-center">
		<form class="form" action="act_register.php" method="post">		

			<div class="form-group">
			<label for="nameField">UserName</label>
			<input type="text" class="form-control input-sm" name="uname" required placeholder="User Name" autocomplete="off" />
			</div>

			<div class="form-group">
			<label for="passField">New Password</label>
			<input type="password" class="form-control" name="npwd" required placeholder="New Password" />
			</div>

			<div class="form-group">
			<label for="CPassField">Confirm Password</label>
			<input type="password" class="form-control" name="cpwd" required placeholder="Confirm Password" />
			</div>

			<input type="submit" class="btn btn-info btn-block" value="Register" /> 

		</form>
	</div>

		<div class="panel-footer btn-link text-center">
			<a href="login.php">Cancel</a>
		</div>
</div>

<?php
include "footer.php";
?>




