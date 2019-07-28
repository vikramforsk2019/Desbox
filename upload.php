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
 
$pp1=basename( $_FILES["fileToUpload"]["name"]);

if(!empty($pp1)) 
{
     
//start file code and for loop check
   
$n=20; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
  
 $p=getName($n);


mkdir("/opt/lampp/htdocs/desbox/classpic2/".$p."/", 0755) ;


$target_dir = "/opt/lampp/htdocs/desbox/classpic2/".$p."/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


$name=$p."/".basename($_FILES["fileToUpload"]["name"]);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "";
        $uploadOk = 1;
    } else 
    {
        echo "<center>File is not an image.</center>";
        $uploadOk = 0;
    }
}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "zip" && $imageFileType != "pdf" ) {
    echo "<center>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</center>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0)
{
    echo "<center>Sorry, your file was not uploaded.</center>";
// if everything is ok, try to upload file
}
 else

 {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
{
    
       // echo "<center><i><h4>The file path     ".$name."/". basename( $_FILES["fileToUpload"]["name"]). "     </h4></i></center>";
 //echo "<center><i><h4>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</h4></i></center>";
 //  mysqli_query($conn,"update profile set pic='$name' where email='".$_SESSION['room']."'");
   //header("Location:profile.php");


mysqli_query($conn,"INSERT INTO message(classcode,message,pic,pic1,dat,name,filetype)
                VALUES('$h1','$h4','$h2','$name','$today','$h3','$imageFileType')");
header("Location:index.php");


exit();

    }
 else
 {           header("Location:index.php");
exit();
       // echo "<center>Sorry, there was an error uploading your file.</font></center>";
    }

}
}

//close the if loop
else
{
   

mysqli_query($conn,"INSERT INTO message(classcode,message,pic,pic1,dat,name,filetype)
                VALUES('$h1','$h4','$h2','null','$today','$h3','null')");
header("Location:index.php");


}

?>

