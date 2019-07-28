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



$m1=$_POST['cname'];
$m2=$_POST['section'];
$m3=$_POST['subject'];
$m4=$_POST['marks'];
$m5=$_POST['submittime'];


$a=array();
$a[0]="badge-dark";
$a[1]="badge-info";
$a[2]="badge-primary";
$a[3]="badge-warning";
$a[4]="badge-success";
$a[5]="badge-danger";
$a[6]="badge-primary";
$a[7]="badge-secondary";
$a[8]="badge-success";
$a[9]="badge-dark";
$a[10]="badge-info";
$a[11]="badge-primary";
$a[12]="badge-primary";
$a[13]="badge-warning";
$a[14]="badge-success";
$a[15]="badge-danger";
$a[16]="badge-primary";
$a[17]="badge-secondary";
$a[18]="badge-success";
$a[19]="badge-info";
$a[20]="badge-primary";
$a[21]="badge-warning";
$a[22]="badge-success";
$a[23]="badge-danger";


$n=5; 
function getName($n) { 
    $characters = 'abcdefghijklmnopqrstuvwxyz'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
  
 $m6=getName($n);
 
 $m8=(rand(1,23));


  $sql = "SELECT name from profile where email='$m'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
 {
        $m9=$row["name"];
       

 }
}

$sql = "SELECT CURRENT_DATE() as date ";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
 {
        $date=$row["date"];
      

 }

}

mysqli_query($conn,"INSERT INTO classcreate(email,cname,section,subject,marks,submittime,classcode,classpic,color)
				VALUES('$m','$m1','$m2','$m3','$m4','$m5','$m6','$m8','$a[$m8]')");


mysqli_query($conn,"INSERT INTO join1(email,classcode,dat,name)
                VALUES('$m','$m6','$date','$m9')");

header("Location:index.php");

  }
?>
  