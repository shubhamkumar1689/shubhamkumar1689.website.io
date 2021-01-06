<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Railway</title>
</head>
	
<style>
	.bg{background:url("images/people.jpg") no-repeat;background-size: 100% 100%;width:100%;height:60vh;}
	@media screen and (min-width: 768px) {p{text-align: right !important}}
	select,input{margin-bottom: 10px !important;}
	p{padding-left: 0px !important;margin-top: 10px !important}
	pre{background:#17a2b88f !important;}
</style>


<body background="images/backg.jpg">

<?php
	session_start();
	if(empty($_SESSION['username']))							//CHECK IF NOT LOGGED IN
	{
		$_SESSION['train_no'] = $_POST['train_no'];	
		header("Location: ../major projectr/login.php?login_first");
	}
	if(empty($_SESSION['train_no'])&&empty($_POST['train_no']))  //CONDITION FOR AVOID BACK AFTER PROCESSING 
	{	
		$_SESSION['train_no'] = $_POST['train_no'];
		header("Location: ../major projectr/findtrain.php?search_first");
	}
	if(!empty($_POST['train_no']))
	{
		$_SESSION['train_no'] = $_POST['train_no'];
	}

	include_once 'welcome.php';										//INCLUDE PAGE OF HEADER AND MENU 

	$train_no=$_SESSION['train_no'];
	$SELECT="SELECT * FROM `train` WHERE train_no='$train_no' ";
	$conn= mysqli_connect('localhost', 'root', '', 'railway');
	$result=mysqli_query($conn,$SELECT);
	$row=mysqli_fetch_assoc($result);								//FETCH TRAIN DETAIL
?>	

<!-- IMAGE AND HEADING SECTION START -->
<section class="bg mt-0 position-relative">
	<p class="font-weight-bolder display-2 " style="position: absolute;top: 50%;left:50%; right: 20px;">BOOK YOUR TICKET</p>
</section>
<!-- IMAGE AND HEADING SECTION END -->
	
<!-- CONDITIONAL FORM START -->
<?php
	if(empty($_POST['date']))									//CHECK IF DATE,SEAT,CLASS IS NOT FILLED
	{ ?>
			<form action="reserv.php" method="POST"class="container">
		<?php
	}
	else 														//CHECK IF TRAVELLER DETAILS IS NOT FILLED
	{?>
		<form action="book.php" method="POST"class="container">
		<?php
	}
?>
<!-- CONDITIONAL FORM END -->

<!-- BOOKING DETAIL INPUT AND OUTPUT CODE START HERE -->	
<section class="row my-auto p-5">
	
		
	<!-- OUTPUT TRAIN NO AND NAME -->

	<p class="col-md-3"><b> Train Number:</b></p>
	<pre class="col-md-3 "><?php echo $train_no; ?></pre>

	<p class="col-md-3"><b>Train Name :</b></p>
	<pre class="col-md-3 text-wrap"><?php echo $row['T_name'] ;?> </pre>
	
	<!-- OUTPUT SOURCE AND DESTINATION-->
	
	<p class="col-md-3"><b> Source Station :</b></p>
	<pre class="col-md-3"><?php echo $row['source'] ;?></pre>
	<p class="col-md-3"><b>Destination Station  :</b></p>
	<pre class="col-md-3"><?php echo $row['destination'] ;?> </pre>
	
	<!-- OUTPUT SEAT AVAILABLE -->
			
	<p class="col-md-3"><b>Seat Available :</b></p>
	<pre class="col-md-3"><?php echo $row['seat'] ;?></pre><p class="col-sm-6"></p>
	
	<hr class="col-12">

	
	<?php
		$fair=$row['fair'];
		if(empty($_POST['date']))										//CHECK IF DATE,SEAT,CLASS IS NOT FILLED
		{ ?>		

			<!-- INPUT DATE,CLASS AND FAIR -->
			<p class="col-md-3"><b>Enter Journey Date:</b></p>
			<input type="date" size="20" name="date" class="form-control col-md-3 " required>

			<p class="col-md-3"><b>Class & Fair :</b></p>

			<!-- FAIRS ARE DISPLAYED BY OPERATION ON EACH LINE  -->
			<select name="class" class="form-control col-md-3">
				<option value="SL">Sleeper Class(SL)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp								<?php echo $fair;?></option>
				<option value="3A">AC 3 Tier (3A)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 		<?php echo $fair+=$fair*50/100;?></option>
				<option value="2A">AC 2 Tier (2A) &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<?php echo $fair+=$fair*50/100;?></option>
				<option value="1A">AC First Class (1A)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp									<?php echo $fair+=$fair*50/100;?></option>
				
			</select>
				
			<!--  INPUT QUOTA AND SEAT-->
			<p class="col-md-3"><b>Quota:</b></p>
		
				<select name="quota" class=" col-md-3 form-control" height="30px" >
					<option value="GENERAL">GENERAL</option>
					<option value="SENIOR CITIZEN">SENIOR CITIZEN</option>
					<option value="LADIES">LADIES</option>
					<option value="TATKAL">TATKAL</option>
					<option value="DIVYAANG">DIVYAANG</option>
				</select>
			<p class="col-md-3"><b>Seat :</b></p>
			<input type="number" value=1 min='1' max='6' name="seat" class="col-md-3 form-control">	
		<?php
		}	
		else 													//CHECK IF TRAVELLER DETAILS IS NOT FILLED
		{ 	
			$total=$row['fair'];
			$class=$_POST['class'];
			$_SESSION['seat']=$_POST['seat'];
			$_SESSION['date']=$_POST['date'];
			$_SESSION['class']=$_POST['class'];
			$_SESSION['quota']=$_POST['quota'];
		

																		// PRICE SELECTER LOOP
			if($class!="SL")
			{
				$total+=$total*50/100;
				if($class!="3A")
				{
					$total+=$total*50/100;
					if($class!="2A")
						$total+=$total*50/100;
				}
			}
			$_SESSION['total']=$total*$_POST['seat'] ;
			?>	
			<!-- OUTPUT SEAT BOOKED AND DATE -->
			
			<p class="col-md-3"><b>Seat :</b></p>
			<pre class="col-md-3"><?php echo $_POST['seat'] ;?></pre>
			<p class="col-md-3"><b>Booking Date :</b></p>
			<pre class="col-md-3"><?php echo $_POST['date'] ; ?> </pre>
					
			<!-- OUTPUT CLASS AND QUOTA -->
			
			<p class="col-md-3"><b>Class :</b></p>
			<pre class="col-md-3"><?php echo $_POST['class'] ;?></pre>
			
			<p class="col-md-3"><b>Quota :</b></p>
			<pre class="col-md-3"><?php echo $_POST['quota'] ; ?></pre> 
					
			<!-- OUTPUT TOTAL PRICE -->
				
			<p class="col-md-3"><b>Total Price:</b></p>
			<pre class="col-md-3"><?php echo $total*$_POST['seat'] ;?></pre>
					<p class="col-md-6"></p>
			<hr class=" col-md-12 ">
				
			<?php	
			
			$i=1;
			while($i<=$_POST['seat'])								//LOOP FOR INPUT CUSTOMER INFO
			{?>	
				<!-- INPUT CUSTOMER NAME,SEX AND AGE -->
				<p class="col-md-3"><b>Traveller<?php echo" ".$i." "?>:</b></p>
				<input type="text" placeholder="Passenger name *" class="form-control col-md-3" name="name<?php echo$i?>" 		required autocomplete="off">

				<p class="col-sm-4 col-md-2"><b>Gender * :</b></p>
				<select name="gender<?php echo$i?>" style='width:150px' class="col-sm-4 col-md-2 form-control">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Transgender">Transgender</option>
				</select>	

				<input type="number" placeholder="Age *"size="20"  min="1" name="age<?php echo$i?>" class="col-sm-4 col-md-2 form-control" required>
				<?php
				$i++;
			}
		}
	?>
	<br>
	

	<!-- BUTTONS -->
		
		
	<br><br><br>
	<?php
	if(empty($_POST['date']))							// PROCEEDING BUTTON AFTER SEAT AND CLASS DETAIL
	{ 	?>
		<p class="col-md-3"></p>
		<button type="submit" class="btn-lg btn-success w-25">Proceed</button>	
		<?php
	}
		?>
	<?php
	if(!empty($_POST['date']))  								//CONFIRM BUTTON AFTER TRAVELLER INFO
		{ 	?>
			<p class="col-md-3"></p>
			<button type="submit" class="btn-lg btn-success w-25">Confirm</button>	
			<?php
		}
	?>
	<!-- RESET  BUTTON-->

	<p class="col-md-1"></p>		
	<a href="findtrain.php"class="btn btn-primary w-25 ml-2" style="height: 48px;padding: 10px 16px;border-bottom: 2px solid black;border-right: 2px solid black;">Clear</a>

	</form>
</section>
<!-- BOOKING DETAIL INPUT AND OUTPUT CODE START HERE -->

<!-- INCLUDE QUICK LINKS  -->
<?php
	include_once 'quick.php';
?>
</body>
</html>