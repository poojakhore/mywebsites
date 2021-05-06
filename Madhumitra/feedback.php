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

<div class="panel panel-primary" style="max-width:300px;margin:auto">
		<div class="panel-heading">
			<center>Feedback</center>
		</div>

<div class="panel-body panel-center">
<form class="form" action="feedback_insert.php" method="post">		


<div class="form-group">
<label for="nameField">Full Name</label>
<input type="text" class="form-control input-sm" name="name" required placeholder="Name" autocomplete="off" />
</div>

<div class="form-group">
<label for="nameField">Contact</label>
<input type="text" class="form-control" name="contact" required placeholder="Contact" autocomplete="off" />
</div>

<div class="form-group">
<label for="nameField">Comment</label>
<textarea class="form-control input-sm" name="comment" required placeholder="Comment" /></textarea>
</div>

<div class="form-group">
<label for="dateField">Updated on</label>
<input type="text" readonly class="form-control input-sm" value= "<?php echo date("y-m-d");?>" name="udate" placeholder="Updated Date" />
</div>
 
        
<input type="submit" class="btn btn-success btn-block" value="Submit" /> 
</form>
</div>

		<div class="panel-footer text-center">
			

		</div>

</div>

<?php
include "footer.php";
?>




