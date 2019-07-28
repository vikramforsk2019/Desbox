   <?php include 'con.php';?>
   <?php include 'postcode.php';?>


<? 
for ($j3=0; $j3 <$len; $j3++) 
{ 
    
   # echo $outputArray[$j3];

$sql4 = "SELECT * FROM post where pid='$outputArray[$j3]'";
$result4 = $conn->query($sql4);
if ($result4->num_rows > 0) 
{
    // output data of each row
    while($row=$result4->fetch_assoc())
    {  

$pid=$row['pid'];
$msg=$row['message'];
$pic=$row['pic'];
$pic1=$row['pic1'];
$dat=$row['dat'];
$name=$row['name'];
$email=$row['email'];
$filetype=$row['filetype'];
    echo $pid."->".$msg."- >".$pic." ->".$pic1."- >".$dat."- >".$name."- >".$email."- >".$filetype;

        
    }
    

}



}



?>