<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>Railway</title>
</head>
<style>
  *{font-family:arial;}
  body{background-image:url("images/backg.jpg");} 
  section th,{background:darkturquoise}
  th{background:darkturquoise}
</style>

<body >

<!-- INCLUDE PAGE OF HEADER AND MENU -->
<?php
  $page="cancelled";
 session_start();  
	include_once 'welcome.php';
?>

<!-- START CODE FOR SHOWING DETAIL  OF ALL CANCELLED TRAIN -->
<section class="container-fluid px-0 px-md-4 my-5 bg-light">
  <center><h1> Cancelled Train Details</h1> <hr class="w-25"></center>
  
  <!-- TABLE FOR LISTING CANCEL TRAIN -->
  <table class="table table-striped table-bordered table-hover table-responsive-sm table-info pb-5">
    <tr>
      <th>Train no.</th>
      <th>Train name</th>
      <th>Source</th>
      <th>Destination</th>
      <th>Fair</th>    
    </tr>
    <?php
      $host = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbname = "railway";
      $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);       //CREATE CONNECTION
      if (mysqli_connect_error())                                            //CHECK IF CONNECTION ERROR
        {
          die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } 
      else
        {     /* SELECT ALL CANCEL TRAIN FROM DATABASE */
              $SELECT = " SELECT `train_no`, `T_name`, `source`, `destination`,`fair` FROM `train` WHERE status='cancel'";
        }
        $result=mysqli_query($conn,$SELECT);
        while($row=mysqli_fetch_assoc($result))                         //LOOP FOR LSITING TRAIN DETAIL
        {
          ?> 
            <tr>
              <td><?php echo $row['train_no'];   ?> </td>
              <td><?php echo $row['T_name'];     ?> </td>
              <td><?php echo $row['source'];     ?> </td>
              <td><?php echo $row['destination'];?> </td>
              <td><?php echo $row['fair'];       ?> &nbsp&nbsp(SL)</td>
            </tr>
          <?php
        }     
    ?>  
  </table>
</section>
<!-- END CODE FOR CANCELLED TRAIN -->
</body>
</html>