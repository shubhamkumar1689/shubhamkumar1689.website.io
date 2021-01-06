<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Railway</title>
</head>
<style type="text/css">
	body{background-image:url("images/backg.jpg");}
	.bg{background:#fd7e14a6;}
</style>
<body>
<!-- INCLUDE PAGE OF HEADER AND MENU  -->
<?php
session_start();
if(!empty($_POST['pnr']))											//PNR VALIDATION CODE
	{ 
		
		$pnr=$_POST['pnr'];
		$conn= mysqli_connect('localhost', 'root', '', 'railway');//CREATE CONNECTION
		$Select="SELECT * FROM `book` WHERE pnr='$pnr'";
		$Result=mysqli_query($conn,$Select);
		$rnum=@mysqli_num_rows($Result);
		if($rnum==1)												//VALID PNR
		{$_SESSION['pnr']=$pnr;										//SET A SESSION AND DISPLAY PNR DETAILS
			
			header("Location: ../major projectr/book.php?pnr=result");}
			else 													//INVALID PNR
			{	$page="pnr";										//FOR ACTIVE LINK IN NAVBAR
				include_once 'welcome.php';
				echo'<p for="pnr" class="text-center ml-md-5 mt-5 my-md-5 p-2"><b>!Enter Correct PNR</b></p>';
			}
		}
		$page="pnr";												
		include_once 'welcome.php';
?>
<!-- START CODE FOR CANCEL FORM -->
<section class="container bg p-5 mt-5">

	<center>
		<h1>PNR Enquiry</h1>
		<small>Enter the PNR, You will find it on the top left corner of the ticket.</small>
	</center>
	<!-- FORM FOR INPUT PNR NUMBER -->
	<form action="pnr.php" method="POST" class="d-flex flex-column flex-md-row ">
		<label for="pnr" class=" w-100 w-md-25 text-md-right ml-md-5 mt-5 my-md-5 p-2"><b>Enter PNR No. :</b></label> 
		<input type="number" class="form-control w-100 w-md-25 ml-md-2 mt-3 my-md-5 " name="pnr" placeholder="Enter PNR No." autocomplete="off"></input>
		<button type="submit" class=" form-control btn btn-primary w-100 w-md-25 ml-md-5 mt-5 my-md-5 ">Search</button> 
		<a href="pnr.php" class="btn btn-success form-control w-100 w-md-25 ml-md-2 mt-3 my-md-5 ">Clear</a>
	</form>

	<!-- USER BOOKED TICKET PNR (ONLY IF SIGNED IN) -->
	<?php
	if(!empty($_SESSION['username']))									//CHECK IF SIGNED IN
		{	$username=$_SESSION['username'];
			$conn= mysqli_connect('localhost', 'root', '', 'railway');
			$Select="SELECT * FROM `book` WHERE p_id='$username'";
			$Result=mysqli_query($conn,$Select);
			?>
			<div class="form-inline justify-content-center">
				<label for="pnr" class="  w-sm-50 w-md-25 text-md-right ml-md-5 mt-5 my-md-5 p-2"><b>Your PNRs :</b></label>
					<?php
				while($row=mysqli_fetch_assoc($Result))					//LOOP FOR MULTIPLE PNR SHOW
					{?>
						<!-- AUTOFILL FORM FOR PNR WITH HIDDEN INPUT FIELD -->
						<form action="pnr.php" method="POST">
							<input type="number" name="pnr"value="<?php echo $row['pnr'];?>" style='display:none;'>
							<button type="submit" class=" form-control btn btn-info  w-sm-50 w-md-25 ml-5 mt-5 my-md-5 "><?php echo $row['pnr']?></button>
						</form><?php
					}?>  
			</div><?php
		}?>
	
</section>
<!-- END CODE FOR CANCEL FORM -->
</body>
</html>

<!-- INCLUDE QUICK LINKS  -->
<?php
include_once 'quick.php';
?>