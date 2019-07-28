<?php ob_start(); // needs to be added here ?>
<?php include 'con.php';?>
<?php
  session_start();
$user_check=$_SESSION['room']; 
if (!isset($_SESSION['room'])) {
       
header("Location:index.php");
    }


    $h1=$_POST['code'];
    $h2=$_POST['pic'];
    $h3=$_POST['uname'];
    $h4=$_POST['msg'];
   $today = date("M-d");


mysqli_query($conn,"INSERT INTO message(classcode,message,pic,pic1,dat,name,filetype)
                VALUES('$h1','$h4','$h2','null','$today','$h3','null')");
header("Location:index.php");



?>

