 <?php include 'con.php';?>
<? 
  session_start();
$user_check=$_SESSION['room']; 
if (!isset($_SESSION['room'])) {
        /// your code here
header("Location:index.php");
    }
$key=$_GET['kddsfwefwcwefvwvefwe'];

$sql = "DELETE FROM comment WHERE cid='$key'";

if ($conn->query($sql) === TRUE) 
{
    
header("Location:index.php");
}


?>
