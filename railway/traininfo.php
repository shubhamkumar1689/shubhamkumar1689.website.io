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

<!-- INCLUDE PAGE OF SEARCH FORM -->
<?php
	include_once 'findtrain.php';
?>
<!-- START CODE FOR SHOWING DETAIL  OF ALL TRAIN OR SEARCH TRAIN -->
<section class="container-fluid px-0 px-md-4 my-5 bg-light">
  <center><h1>Train Details</h1> <hr class="w-25"></center>
  <!-- TABLE FOR LISTING TRAIN DETAILS -->
  <table class="table table-striped table-bordered table-hover table-responsive-sm table-info pb-5">
    <tr>
      <th>Train no.</th>
      <th>Train name</th>
      <th>Source</th>
      <th>Destination</th>
      <th>Seat Available</th>
      <th>Fair</th> 
      <th>Proceed</th>    
    </tr>
    <?php
      $host = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbname = "railway";
      $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);//CREATE CONNECTION
      if (mysqli_connect_error())                              //CHECK IF CONNECTION ERROR
        {
          die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } 
      else
        {
          if(empty ($_POST['source']) && empty ($_POST['dest']))
            {
              $SELECT = "SELECT * From train ";            // GET ALL TRAIN DETAILS FROM THE DATABASE 
            }
          else
            { 
              $source=$_POST['source'];
              $dest=$_POST['dest'];       
              $SELECT = "SELECT * From train where source='$source' && destination='$dest';";
                                                      // GET THE DETAILS OF SEARCH TRAIN FROM DATABASE 
            }

          $result=mysqli_query($conn,$SELECT);
          while($row=mysqli_fetch_assoc($result))             //LOOP FOR LSITING TRAIN DETAILS
          {
            ?> 
                <tr>
                  <td><?php echo $row['train_no'];   ?> </td>
                  <td><?php echo $row['T_name'];     ?> </td>
                  <td><?php echo $row['source'];     ?> </td>
                  <td><?php echo $row['destination'];?> </td>
                  <td><?php echo $row['seat'] ;      ?> </td>
                  <td><?php echo $row['fair'] ;      ?> &nbsp&nbsp(SL)</td>
                  <!-- FORM FOR BOOK BUTTON -->
                  <form action="reserv.php" method=post>                  <!--FORM  -->
                    <!-- HIDDEN INPUT BUTTON -->
                    <input type="text" value="<?php echo $row['train_no'];?>" name=train_no style="display:none">
                    <td ><button id=bt type=submit class="btn btn-info w-100"><b>Book</b> </button></td>
                  </form>
                </tr>
            <?php
          }     
        }
    ?>  
  </table>
</section>
<!-- END CODE FOR SHOWING DETAILS OF ALL TRAIN OR SEARCH TRAIN -->
</body>
</html>