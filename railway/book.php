<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Railway</title>
	<style>
		@media screen and (min-width: 768px) {p{text-align: right !important}}
		select,input{margin-bottom: 10px !important;}
		p{padding-left: 0px !important;margin-top: 10px !important}
		pre{background:#17a2b861 !important;}
	</style>
</head>
<body background="images/backg.jpg">
<?php
session_start();         
if(empty($_SESSION['pnr']) && empty($_SESSION['train_no']))			//CHECK FOR PREVENT REDUNDANCY
{header("Location: ../major projectr/findtrain.php?search first");
}

include_once 'welcome.php';  	 									//INCLUDE PAGE OF HEADER AND MENU 

$conn= mysqli_connect('localhost', 'root', '', 'railway'); 			//CREATE CONNECTION
if(empty($_SESSION['pnr']))											//CHECK FOR NOT A PNR ENQUIRY
{
	$train_no = $_SESSION['train_no'];
	$date = $_SESSION['date'];
	$seat = $_SESSION['seat'];
	$quota = $_SESSION['quota'];
	$class = $_SESSION['class'];
	$total = $_SESSION['total'];
	$username=$_SESSION['username'];

	$Ibook="INSERT INTO `book` (`pnr`, `p_id`, `train_no`,`date`, `seat`, `class`, `quota`,`price`) VALUES (NULL,'$username', '$train_no','$date', '$seat', '$class', '$quota','$total')";	//GENERATE INSERT QUERY 

	mysqli_query($conn,$Ibook);											//QUERY EXECUTE

	$Sbook="SELECT * FROM `book` WHERE p_id='$username' && train_no='$train_no' && seat='$seat' && `date`='$date' && class='$class' && quota='$quota' ";				//GENERATE FETCH QUERY
	$Rebook=mysqli_query($conn,$Sbook);
	$Robook=mysqli_fetch_assoc($Rebook);									//FETCH QUERY EXECUTE
	$pnr=$Robook['pnr'];		
												//FETCH PNR

	$Strain="select * from train where train_no='$train_no';";				//QUERY FOR TRAIN DETAIL
	$Retrain=mysqli_query($conn,$Strain);
	$Rotrain=mysqli_fetch_assoc($Retrain);
	$Seat=$Rotrain['seat']-$seat;											//UPDATE AVAILABLE SEAT IN TRAIN
	$updateseat="UPDATE `train` SET `seat` = '$Seat' WHERE `train`.`train_no` = '$train_no';";
	mysqli_query($conn,$updateseat);



	$i=1;
	while($i<=$seat)													//LOOP FOR INSERTING PASSENGER DETAIL
	{
		$name=$_POST["name$i"];
		$gender=$_POST["gender$i"];
		$age= $_POST["age$i"];
		$passenger="INSERT INTO `passenger` (`p_id`, `pnr`, `name`, `gender`, `age`) VALUES ('$username', '$pnr', '$name', '$gender', '$age')";			
		mysqli_query($conn,$passenger);
		$i++;
	}
	unset($_SESSION['train_no']);
	unset($_SESSION['seat']);
	unset($_SESSION['quota']);
	unset($_SESSION['class']);
	unset($_SESSION['date']);
	echo'<p for="pnr" class="text-center ml-md-5 mt-5 my-md-5 p-2"><b>Booking Successful</b></p>'; 
}
else
{																		//CHECK FOR IF A PNR ENQUIRY
	$pnr=$_SESSION['pnr'];
	
}

$Sbook="SELECT * FROM `book` WHERE pnr='$pnr'"; 						 //FETCHING BOOKING DETAIL
$Rebook=mysqli_query($conn,$Sbook);
$Robook=mysqli_fetch_assoc($Rebook);
$train_no=$Robook['train_no'];
$Strain="select * from train where train_no='$train_no';";				//FETCHING TRAIN DETAIL
$Retrain=mysqli_query($conn,$Strain);
$Rotrain=mysqli_fetch_assoc($Retrain);
$Spassenger="select * from `passenger` where pnr='$pnr';";				//FETCHING PASSENGER DETAIL
$Repassenger=mysqli_query($conn,$Spassenger);
?>

<!-- BOOKING DETAIL OUTPUT CODE START HERE -->
<section class="container  bg-white my-5  p-5">
	<div class="row pr-md-5 mr-md-5">
	
	<!-- OUTPUT PNR NUMBER -->
	<p class="col-md-3"><b>Pnr :</b></p>
	<pre class="col-md-3 "><?php echo $Robook['pnr']; ?></pre>
	<p class="d-none d-md-block col-md-6"></p>

	<!-- OUTPUT TRAIN NO AND NAME -->
	<p class="col-md-3"><b> Train Number:</b></p>
	<pre class="col-md-3 "><?php echo $Robook['train_no']; ?></pre>
	<p class="col-md-3"><b>Train Name :</b></p>
	<pre class="col-md-3 text-wrap"><?php echo $Rotrain['T_name'] ;?> </pre>

	<!-- OUTPUT SOURCE AND DESTINATION-->
	<p class="col-md-3"><b> Source Station :</b></p>
	<pre class="col-md-3"><?php echo $Rotrain['source']  ;?></pre>
	<p class="col-md-3"><b>Destination Station  :</b></p>
	<pre class="col-md-3"><?php echo $Rotrain['destination'] ;?> </pre>

	<!-- OUTPUT SEAT AND DATE -->
	<p class="col-md-3"><b>Seat :</b></p>
	<pre class="col-md-3"><?php echo $Robook['seat']  ; ?></pre>
	<p class="col-md-3"><b>Booking Date :</b></p>
	<pre class="col-md-3"><?php echo $Robook['date'];?> </pre>
				
	<!-- OUTPUT CLASS AND QUOTA -->
	<p class="col-md-3"><b>Class :</b></p>
	<pre class="col-md-3"><?php echo $Robook['class'] ;?></pre>
	<p class="col-md-3"><b>Quota :</b></p>
	<pre class="col-md-3"><?php echo $Robook['quota'] ; ?></pre> 
	<hr class="col-12">

	<?php
if(!empty($_SESSION['username'])) 									//CHECK IF LOGGED IN
{
	$i=1;
	while($row=mysqli_fetch_assoc($Repassenger))					//LOOP FOR OUTPUT PASSENGER DETAILS
	{	?>
		<p class="col-md-3"><b>Traveller<?php echo " ".$i." ";?>:</b></p>	<!--TARVELLER NO-->
		<pre class="col-md-3 bg-white"><?php echo $row["name"];?></pre>		<!--TRAVELLER NAME-->
		<p class="col-sm-4 col-md-2"><b>Gender * :</b></p>					<!--LABLE FOR GENDER-->
		<pre class="col-sm-4 col-md-2 bg-white"><?php echo $row["gender"];?></pre><!--TRAVELLER GENDER-->
		<div class="col-sm-4 col-md-2" ><pre class="bg-white"><?php echo $row["age"];?></pre></div><!--TRAVELLER AGE-->
		<?php
		$i++;
	}
}
	?>
	<hr class="col-12">
		<!-- OUTPUT TOTAL PRICE PAID -->
	<p class="col-md-3"><b>Total Price Paid:</b></p>
	<pre class="col-md-3 bg-warning"><?php echo $Robook['price'] ;?></pre>
	<p class="col-md-6"></p>
	
	
		<!--CHECK IF REQUEST FOR CANCEL -->
 <?php
 if(!empty($_SESSION['cancel']))
 {?>

 	<form action="cancel.php" method="POST" class="col-12">
 		<!-- HIDDEN INPUT -->
	 <input type="number" name="cancel"value="<?php echo $_SESSION['pnr']?>" style="display:none">
	 <p class="col-md-5"></p>
	 <!-- BUTTON VISIBLE IF CANCEL REQUEST -->
	 <button class="btn btn-primary col-md-4 mt-5" type="submit">Confirm cancellation</button>
	 </form>
	<?php
	 unset($_SESSION['cancel']);
}
unset($_SESSION['pnr']);
?>
</div>
</section>	
<!-- BOOKING DETAIL OUTPUT CODE END HERE -->
</body>
</html>
