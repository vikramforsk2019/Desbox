<?php include 'con.php';?>
<?php
  session_start();

if (isset($_SESSION['room']))
 {
        /// your code here
header("Location:index.php");

exit();
    }
else

{
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Desbox Login and Register Page....</title>
    <meta name="description" content="">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center m-b-md custom-login">
                <h4>Welcome in Desbox</h4>
                
            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="logindata.php" method="post" id="loginForm">
                          
                              <div class="form-group">
                                <label class="control-label" for="password">Email</label>
                                <input type="email" title="Please enter your password" placeholder="example@gmail.com" required="" value="" name="email" id="password" class="form-control">
                                  </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                   </div>
                            <div class="checkbox login-checkbox">
                                <label>
                                        <input type="checkbox" class="i-checks"> Remember me </label>
  </div>
                            <button class="btn btn-success btn-block loginbtn">Login</button>
                            <a class="btn btn-default btn-block" href="register.php">Register</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="text-center login-footer">
                <p>Desbox</p>
            </div>
        </div>   
    </div>
</body>

</html>
<?
}
?>