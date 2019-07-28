<?php include 'con.php';?>
<?
session_start();

$m3=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$pic="user-thumb.jpg";

mysqli_query($conn,"INSERT INTO profile(name,email,password,pic,about)
				VALUES('$m3','$email','$pass','$pic','No Explanation')");
$_SESSION['room'] = $email;
header("Location:index.php");

?>
