   <?php include 'con.php';?>
<? 
  session_start();
$user_check=$_SESSION['room']; 
if (!isset($_SESSION['room'])) {
        /// your code here
header("Location:login.php");
    }
$a=array();
$i=0;
$j=0;
$sql = "SELECT classcode FROM join1 where email='$user_check'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc())
    {  

     $p1=$row['classcode'];
     $a[$i]=$p1;
     $i++;
    # echo $p1."<br>";
        
    }

} 

$b=array();
$i1=0;

for($j=0;$j<$i;$j++)
{
$sql1 = "SELECT email FROM join1 where classcode='$a[$j]'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) 
{
    // output data of each row
    while($row = $result1->fetch_assoc())
    {  

     $p2=$row['email'];
        $b[$i1]=$p2;
        $i1++;
   #  echo $p2." <br>";
        
    }
   

} 

}





$c1=array();
$i2=0;

for ($j1=0; $j1 <$i1 ; $j1++) 
{ 
    # code...

$sql2 = "SELECT pid FROM post where email='$b[$j1]'";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) 
{
    // output data of each row
    while($row = $result2->fetch_assoc())
    {  

     $p3=$row['pid'];
      $c1[$i2]=$p3;
      $i2++;
    
        
    }
    

} 
}


$i3=0;
 $c2=array();
  $c=array();
$sql3 = "SELECT pid FROM post where email='$user_check'";
$result3 = $conn->query($sql3);
if ($result3->num_rows > 0) 
{
    // output data of each row
    while($row = $result3->fetch_assoc())
    {  

     $q=$row['pid'];
      $c2[$i3]=$q;
      #echo $c2[$i3];
      $i3++;

        
    }
   

}

$len1=sizeof($c1);
$len2=sizeof($c2);
$k1=0;
$k2=0;


while ($k1 <$len1)
 {
    # code...
    $c[$k1]=$c1[$k1];
    $k1++;
}


while ($k1 <$len2)
 {
    # code...
    $c[$k1]=$c2[$k1];
    $k1++;
}


sort($c);



$inputArray = $c;
$outputArray = array();

foreach($inputArray as $inputArrayItem) {
    foreach($outputArray as $outputArrayItem) {
        if($inputArrayItem == $outputArrayItem) {
            continue 2;
        }
    }
    $outputArray[] = $inputArrayItem;
}



$len=sizeof($outputArray);



?>