<?php
session_start();
$username = $_SESSION['user1'];
$password = $_POST['password'];
$first = $_POST['first'];
$mid = $_POST['mid'];
$last = $_POST['last'];
$gender = $_POST['gender'];
$DOB = $_POST['DOB'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];
unset($_SESSION['user1']);
if (!empty($username) || !empty($password)  || !empty($first) || !empty($last) || !empty($gender) || !empty($DOB)  || !empty($phone) || !empty($email) )                         //CHECK IF CREDIANTIALS ARE NOT EMPTY
{   
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "railway";
    
    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);        //CREATE CONNECTION
    if (mysqli_connect_error())                                              //CHECK FOR CONNECTION ERROR
     {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
     } 
     else 
        {                                                                     //QUERY FOR INSERTING VALUE
                $reg="INSERT INTO `user` (`p_id`, `password`, `first_name`, `mid_name`, `last_name`, `gender`, `DOB`, `mobile`, `email`, `city`) VALUES ('$username', '$password', '$first', '$mid', '$last', '$gender', '$DOB', '$phone', '$email', '$city')";
                mysqli_query($conn,$reg);                                    //EXECUTE QUERY

                $_SESSION['alertsignup']=1;                          //GO TO LOGIN PAGE AND SHOW A SIGNUP ALERT
                header("Location: ../major projectr/login.php?login_success");

        $conn->close();
        }
} 
else 
{
    echo "All field are required";
    die();
}
?>