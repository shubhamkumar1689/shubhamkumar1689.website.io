<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Railway</title>

</head>
<style >
	body{background-image:url("images/backg.jpg");}
	body,.card{font-family: 'Josefin Sans',sans-serif;margin:0;padding:0;}
	label,option{font-size:16px}
</style>

<body>

<!-- INCLUDE PAGE OF HEADER AND MENU -->
<?php
	$page="findtrain";
	session_start();
	include_once 'welcome.php';
?>
<section class=" container text-center my-5" style="background:#6c757d8a;">
	<h1 class="text-center mb-5">FIND TRAIN</h2>
	<form  class="form row p-5" name="find train" action="traininfo.php" method="POST">
		<label for="source" class="col-md-1  ">Source*</label>

		<!-- INPUT SOURCE STATION -->
		<select name="source" class="form-control btn col-md-4" id="source">
			<option>Select</option>
			<option>Delhi</option>
			<option>Lucknow</option>
			<option>Varanasi</option>
			<option>Punjab</option>
			<option>Mumbai</option>
			<option>Gorakhpur</option>
		</select>
		<label for="dest" class="col-md-2 ">Destination*</label>

		<!-- INPUT DESTINATION STATION -->
		<select name="dest" class="btn form-control col-md-4" id="dest">
			<option>Select</option>
			<option>Delhi</option>
			<option>Lucknow</option>
			<option>Varanasi</option>
			<option>Punjab</option>
			<option>Mumbai</option>
			<option>Gorakhpur</option>
		</select>
		<!-- SUBMIT BUTTON -->
		<button type="submit" class="btn active bg-dark text-white col-md-3  my-5 mx-auto" >Search</button>
	</form>
</section>
</body>
</html>
<?php 
if(!empty($_SESSION['train_no']))
{
	unset($_SESSION['train_no']);
}
?>
<?php
//include_once 'quick.php';
?>