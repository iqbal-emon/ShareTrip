<?php
	$email = $_GET["j_email"];

	include_once "connection.php";
    include_once "admin_function.php";
	
	$sql = "DELETE FROM jobseeker WHERE j_email='$email'";
	
	$result = mysqli_query($conn,$sql);
	
	if($result){
		
		header("Location: admin_accept_reject.php");
	}
	else{
		echo '<script >alert("Warning!! This is not able to delete")</script>';
	}
?>