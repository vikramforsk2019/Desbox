<?php ob_start(); // needs to be added here ?>
<?php include 'con.php';?>
<?php
  session_start();
$user_check=$_SESSION['room']; 
if (!isset($_SESSION['room'])) {
       
header("Location:index.php");
    }


    $h1=$_POST['pid'];
    $h2=$_POST['pic'];
    $h3=$_POST['name'];
    $h4=$_POST['msg'];
   $today = date("M-d");


mysqli_query($conn,"INSERT INTO comment(message,pic,pid,dat,name,lik)
                VALUES('$h4','$h2','$h1','$today','$h3','0')");
header("Location:index.php");



?>

