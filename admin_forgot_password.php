<?php
include_once "connection.php";

if($_SERVER['REQUEST_METHOD'] =="POST")
{
$user = $_POST['admin_email'];
$key = $_POST['security_key'];
$password = $_POST['admin_password'];

if(!empty($user) && !empty($key))
{

$sql = "SELECT * from admin_server where admin_email = '$user' limit 1";
$sql1 = "UPDATE admin_server SET admin_password='$password' WHERE admin_email='$user'";

$result = mysqli_query($conn,$sql);
if($result){
if($result && mysqli_num_rows($result)>0){
$user = mysqli_fetch_assoc($result);

if($user['security_key'] === $key){
$_SESSION['admin_email'] = $user['admin_email'];


$result = mysqli_query($conn,$sql1);
if($result){


if ($conn->query($sql1) === TRUE){
    header("Location:admin_password_changed.php");
    die;
}
else{
    header("Location:admin_password_unchanged.php");
    die;
}
}
else{
    header("Location:admin_password_unchanged.php");
    die;
}
header("Location:admin_password_changed.php");
die;
}
}
}
header("Location:admin_password_fail.php");
    die;
}
else
{
    header("Location:admin_password_fail.php");
    die;
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Password change</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Admin Password change
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="admin_email" placeholder="Admin Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Your key">
						<input class="input100" type="password" name="security_key" placeholder="Enter Your key">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Enter Your new password">
						<input minlength="3"
    					maxlength="16"
    					alphabet="A-Za-z0-9"
   						requiredclasses="[A-Z] [a-z] [0-9] "
    					requiredclasscount="1"
    					
	class="input100" type="password" name="admin_password" placeholder="Enter Your new password">
	
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
						
					</div>
					<h6> Minimum "3" lenght, Use Uppercase,Lowercase Alphabet and Digit.</h6>
					

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Change Password
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="admin_login.php">
							log in
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>