<?php
	$email = $_GET["f_id"];

	include_once "connection.php";
    include_once "admin_function.php";
	
	$sql = "DELETE FROM food WHERE f_id='$email'";
	
	$result = mysqli_query($conn,$sql);
	
	if($result){
		
		header("Location: admin_food.php");
	}
	else{
		echo '<script >alert("Warning!! This is not able to delete")</script>';
	}
?>