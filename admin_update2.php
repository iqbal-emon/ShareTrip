<html>
	<head>
		<title>Admin's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
        <style>body {
  background-image: url('hh.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<?php
    include_once "connection.php";
    include_once "admin_function.php";

	$admin_email = $_GET["admin_email"];
	$name  = $_GET["admin_name"];
    $phone = $_GET["admin_phone"];
	$security_key = $_GET["security_key"];
	include_once "connect.php";


	$query 	= "UPDATE admin_server
     SET admin_name='$name',
     admin_email='$admin_email', 
     security_key='$security_key',
      admin_phone='$phone'

       WHERE admin_email= '$admin_email' ";


	$result = mysqli_query($conn, $query);
    if($result){
     header("Location:admin_menu.php");
        die;
    }
    
		

?>
</body>
</html>