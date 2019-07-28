<?php ob_start();?>
<?php include 'con.php';?>
<?php
  session_start();
$m=$_SESSION['room'];

if (!isset($_SESSION['room']))
 {
header("Location:login.php");
}
else
{



$m6=$_POST['code'];

$sql = "SELECT name from profile where email='$m'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
 {
        $m9=$row["name"];
       

 }
}

 $today = date("d-M-y");


mysqli_query($conn,"INSERT INTO join1(email,classcode,dat,name)
                VALUES('$m','$m6','$today','$m9')");

header("Location:index.php");

  }
?>
  