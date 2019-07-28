
<?php include 'con.php';?>
<?


$sql5 = "SELECT cid,message,pic,pid,dat,name,lik FROM comment where pid='4'";
$result5 = $conn->query($sql5);
if ($result5->num_rows > 0) 
{
    // output data of each row
    while($row = $result5->fetch_assoc())
    { 
        $c1=$row["cid"];
        $c2=$row["message"];

        $c3=$row["pic"];
        $c4=$row["pid"];
        $c5=$row["dat"];
        $c6=$row["name"];
        $c7=$row["lik"];
           echo $c1."   ".$c2."   ".$c3."   ".$c4."   ".$c5."   ".$c6."   ".$c7."   ";
           echo "<br>";      
    }
    echo "<br>";

} 

?>