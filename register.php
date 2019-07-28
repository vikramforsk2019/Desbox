
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
    <title>Desbox Login and Register Page...</title>
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
                        <form action="registerdata.php" id="loginForm" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="name" id="username" class="form-control">
                                <span class="help-block small">Your unique username to app</span>
                            </div>
                              <div class="form-group">
                                <label class="control-label" for="password">Email</label>
                                <input type="email" title="Please enter your password" placeholder="example@gmail.com" required="" value="" name="email" id="email" class="form-control">
                                <span class="help-block small">Enter Valid Email</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="pass" class="form-control">
                                <span class="help-block small">Your strong password</span>
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
										<input type="checkbox" class="i-checks"> Remember me </label>
  </div>
                            <button class="btn btn-success btn-block loginbtn" id="btn">Register</button>
                            <a class="btn btn-default btn-block" href="login.php">Login</a>
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