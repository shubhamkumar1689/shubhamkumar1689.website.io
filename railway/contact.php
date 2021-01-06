<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Railway</title>
</head>
<style>
	body{background-image:url("images/backg.jpg");}
	.bg{background:url("images/customer (3).jpg");background-size: 100% 100%;}
	form,.bg{padding: 20px 20px}
	form{background:#32a2b859}
	@media screen and (min-width: 768px) {.bg{padding: 50px 20% !important}form{padding: 10px 70px !important}}
	@media screen and (min-width: 1000px) {.bg{padding: 50px 25% !important}form{padding: 10px 100px !important}}
</style>


<body >

	<!-- INCLUDE PAGE OF HEADER AND MENU -->
	
	<?php
	session_start();
	$page="contact";		//FOR ACTIVE LINK IN NAVBAR
	include_once 'welcome.php';
	?>

<!-- CONTACT FORM CODE START -->
<section class="bg">

<form action="cconnect.php" method="post">						<!--FORM  -->
	<center><font size=7>CONTACT US
	<hr class="w-50 text-center"></font>  </center>
	 
	 <!-- INPUT NAME AND PHONE NO -->
	<div class="form-row">
	    <div class="form-group col-md-6">
	      <input type="text" placeholder="First & Last Name" maxlength=30 name="name" class="form-control" id="name" required autocomplete="off"></div>
	      <div class="form-group col-md-6">
	      <input type="text" placeholder="Enter Mobile No." minlength="10" mxlength=30 name="mobile" class="form-control" id="phone" required autocomplete="off">
	   	</div>	
	</div>

	<!-- INPUT EMAIL -->
   <div class="form-row">
	    <div class="form-group col-md-12">
	      <label for="email">Email</label>
	      <input type="email" class="form-control" id="email" placeholder="example@domain.com"name="email" required autocomplete="off">
	    </div>
	</div>

	<!-- INPUT MESSAGE -->
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="text">Message</label>
			<textarea placeholder="Please leave a message..."rows=100 name="message"type="text" style='height:150px;'class="form-control" id="text" required></textarea>
		</div>
  	</div>
  	<!-- SUBMIT AND CLEAR BUTTON -->
 	 <div style="height: 45px;position: relative;" class="my-3">
		  <button type="submit" class="btn-lg btn-success w-25">Submit</button>
		  <a href="contact.php"class="btn btn-primary w-25 ml-2" style="height: 48px;padding: 10px 16px;border-bottom: 2px solid black;border-right: 2px solid black;position: absolute;top: 0px">Clear</a>
	</div>
	<!-- FOOTER -->
	<footer>For any other queries, please call us at 123456789 (8AM - 9PM, 7 days a week).</footer>

  
</form>
</section>
<!-- CONTACT FORM CODE END -->

</body>
</html>

<!-- INCLUDE QUICK LINKS  -->
<?php
include_once 'quick.php';
?>