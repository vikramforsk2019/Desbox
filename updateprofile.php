<?php ob_start(); // needs to be added here ?>
<?php include 'con.php';?>
<?php


 session_start();
$user_check=$_SESSION['room']; 
if (!isset($_SESSION['room'])) {
        /// your code here
header("Location:login.php");
    }
// create a variable
$p1=$_POST['uname'];
$p2=$_POST['email'];
$p3=$_POST['password'];
$p4=$_POST['about'];

//Execute the query

//mysqli_query($conn,"INSERT INTO test1(name,phone,email,password)VALUES('$first','$phone','$email','$pass')");
mysqli_query($conn,"update profile set name='$p1',password='$p3',about='$p4' where email='".$_SESSION['room']."'");
header("Location:profile.php");
exit();
?>

