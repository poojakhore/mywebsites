<?php
include "header.php";
?>

<style>
body
	{
	margin: 0;
	padding: 0;
	background-color: #FFF0F5;
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
	}
</style>

<div class="panel panel-info" style="max-width:300px;margin:auto">

	<div class="panel-heading"> <center style='color:green'>New Items</center> </div>

	<div class="panel-body panel-center">
		<form class="form" action="a_insert_item.php" method="post">

		<div class="form-group">
			<label for="nameField">Item Name</label>
			<input type="text" class="form-control input-sm" name="iname" required placeholder="Item Name" />
			</div>

			<div class="form-group">
			<label for="catField">Item Category</label>
			<select class="form-control" name="icategory">
				<option>Vegetables</option>
				<option>Fruits</option>
				<option>Sprouts</option>
				<option>Other</option>
			</select>
			</div>

			<div class="form-group">
			<label for="unitField">Units</label>
			<select class="form-control" name="iunit">
				<option>Gram</option>
				<option>Kg</option>
				<option>No</option>
				<option>Dozen</option>
			</select>
			</div>

			<div class="form-group">
			<label for="priceField">Price</label>
			<input type="text" class="form-control input-sm" name="iprice" required placeholder="Enter Price" />
			</div>

			<div class="form-group">
			<label for="activeField">Is Available </label>
  			<select class="form-control" name="istatus">
				<option>Y</option>
				<option>N</option>
			</select>
			</div>

			<input type="submit" class="btn btn-info btn-block" value="Add Items" /> 
		</form>
	</div>

	<div class="panel-footer btn-link text-center">
		<a href="a_item_list.php">Back To List</a>			
	</div>
</div>
<?php
include "footer.php";
?>
	