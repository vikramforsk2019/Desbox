<?php include 'con.php';?>
<?
session_start();
$email=$_POST['email'];
$pass=$_POST['password'];
$sql= "SELECT * FROM profile WHERE email = '$email' AND password = '$pass' ";

$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);

if(isset($check))
{

$_SESSION['room']=$email; 
header("Location:index.php");
}
else
{
header("Location:login.php");
echo "Wrong Email and Password......";
}
?>
