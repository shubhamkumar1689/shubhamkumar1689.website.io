<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Railway</title>
</head>
<style type="text/css">
	body{background-image:url("images/backg.jpg");}
	body{font-family: 'Josefin Sans',sans-serif;margin:0;padding:0;background-image:url("images/backg.jpg");}
	form,li{font-size:16px}
</style>

<body>

<!-- INCLUDE CODE OF HEADER AND MENU -->
<?php
session_start();
$page="route";
include_once 'welcome.php';
?>

<!-- START CODE OF ROUTE PAGE -->
<section class="container bg-info my-5" style="max-width: 1000px">
	<h1><center>TRAIN STATUS</center></h1>
	<form action="#" class="p-5">
		<!-- TRAIN NAME INPUT OR TRAIN NUMBER -->
		<div class="form-group d-flex flex-column flex-sm-row p-md-5 mx-auto">
		    <label for="" class="ml-3 col-form-label">Train no. or Name:</label>
		    <div class="flex-sm-fill mx-5">
		      <input type="text" class="form-control" placeholder="Train no. or Name" autocomplete="off">
		    </div>
	  	</div>
	  	<!-- TRAIN STARTED DAY -->
		<fieldset class="form-group p-md-5 ">
		    <div class="row mx-auto">
		      <label class="col-form-label col-sm-4 col-md-3 col-lg-2 pt-0"><b>Train Started:</b></label>
		      <div class="col-sm-5 col-md-6 col-lg-6">
		        <div class="form-check">
		          <input class="form-check-input" type="radio" checked>
		          <label class="form-check-label ml-5">Today</label>
		        </div>
		        <div class="form-check">
		          <input class="form-check-input" type="radio">
		          <label class="form-check-label ml-5">Yesterday</label>
		        </div>
		        <div class="form-check">
		          <input class="form-check-input" type="radio">
		          <label class="form-check-label ml-5">2 days before</label>
		        </div>
		      </div>
		    </div>
	  	</fieldset>
	  	<!-- CHECK STATUS BUTTON -->
	  	<button class="btn-lg btn-warning ml-5">CHECK STATUS</button>
	</form>
</section>
	

	<!-- INCLUDIN QUICK LINK PAGE -->
<?php
	include_once 'quick.php';
?>
</body>
</html>