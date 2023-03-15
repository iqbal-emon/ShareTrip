<?php
	$email = $_GET["admin_email"];

	include_once "connection.php";
    include_once "admin_function.php";
	
	$sql = "DELETE FROM admin_server WHERE admin_email='$email'";
	
	$result = mysqli_query($conn,$sql);
	
	if($result){
		
		header("Location: admin_menu.php");
	}
	else{
		echo '<script >alert("Warning!! This is not able to delete")</script>';
	}
?>