<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Railway</title>
	<style type="text/css">
		body{background-image:url("images/backg.jpg");}
		.bg{background:#6c757d73;}
	</style>
</head>
<body>

<?php
$page="cancel";													//FOR ACTIVE LINK IN NAVBAR
session_start();
if(empty($_SESSION['username']))								//CHECK IF NOT LOGGED IN
	{
		header("Location: ../major projectr/login.php?login_first");
	}
$conn= mysqli_connect('localhost', 'root', '', 'railway');		//CREATE CONNECTION

if(!empty($_POST['pnr']))										//PNR VALIDATION CODE
{ 
	$pnr=$_POST['pnr'];
	$Select="SELECT * FROM `book` WHERE pnr='$pnr'";
	$Result=mysqli_query($conn,$Select);
	$rnum=@mysqli_num_rows($Result);				
	if($rnum==1)												//VALID PNR
	{
		$_SESSION['pnr']=$pnr;
		$_SESSION['cancel']=1;									//SET A SESSION AND DISPLAY PNR DETAILS
		header("Location: ../major projectr/book.php?pnr_result");		
	}
		else 														//INVALID PNR
		{	
			include_once 'welcome.php'; 							// INCLUDE PAGE OF HEADER AND MENU 
			echo'<p for="pnr" class="text-center ml-md-5 mt-5 my-md-5 p-2"><b>!Enter Correct PNR</b></p>';
		}
}
if(!empty($_POST['cancel']))							//AFTER DISPLAY PNR DETAIL AND CONFIRM CANCEL
{
	$pnr=$_POST['cancel'];
	$Select="SELECT * FROM `book` WHERE pnr='$pnr'";  
	$Result=mysqli_query($conn,$Select);
	$Row=mysqli_fetch_assoc($Result);									//FETCH DETAILS OF TICKET

	$train_no=$Row['train_no'];
	$Strain="select * from train where train_no='$train_no';";
	$Retrain=mysqli_query($conn,$Strain);
	$Rotrain=mysqli_fetch_assoc($Retrain);								//FETCH DETAILS OF TRAIN

	$seat=$Rotrain['seat']+$Row['seat'];
	$updateseat="UPDATE `train` SET `seat` = '$seat' WHERE `train`.`train_no` = '$train_no';";
	$Repassenger=mysqli_query($conn,$updateseat);						//UPDATE AVAILABLE SEAT IN TRAIN

	$Select="DELETE FROM `book` WHERE `book`.`pnr` ='$pnr'";
	mysqli_query($conn,$Select);										//DELETE TRAVEL DETAILS
	$select="DELETE FROM `passenger` WHERE pnr='$pnr'";		
	mysqli_query($conn,$select);										//DELETE PASSENGER DETAILS

	include_once 'welcome.php';
	echo'<p for="pnr" class="text-center ml-md-5 mt-5 my-md-5 p-2"><b>Cancellation Successful</b></p>'; 
}
include_once 'welcome.php';
?>
	
<!-- START CODE FOR CANCEL FORM -->
<section class="container bg p-5 mt-5">
	<center>
		<h1>TICKET CANCELLATION</h1>
		<small>Enter the PNR, You will find it on the top left corner of the ticket.</small>
	</center>
	<!-- FORM FOR INPUT PNR NUMBER -->
	<form action="cancel.php" method="POST" class="d-flex flex-column flex-md-row">		<!--FORM  -->
		<label for="pnr" class=" w-100 w-md-25 text-md-right ml-md-5 mt-5 my-md-5 p-2"><b>Enter PNR No. :</b></label> 
		<input type="number"class="form-control w-100 w-md-25 ml-md-2 mt-3 my-md-5"name="pnr"placeholder="Enter PNR No."autocomplete="off">
		<button type="submit" class=" form-control btn btn-primary w-100 w-md-25 ml-md-5 mt-5 my-md-5 ">SEARCH</button> 
		<a href="pnr.php" class="btn btn-success form-control w-100 w-md-25 ml-md-2 mt-3 my-md-5 ">CLEAR</a>
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
						<form action="cancel.php" method="POST">			<!--FORM  -->
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