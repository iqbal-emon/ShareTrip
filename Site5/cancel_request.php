<?php
	$id = $_GET["id"];

	include_once "../connection.php";
    include_once "../admin_function.php";
	
	$sql = "DELETE FROM request_table WHERE id='$id'";
	
	$result = mysqli_query($conn,$sql);
	
	if($result){
		
		header("Location: admin_cancel_request.php");
	}
	else{
		echo '<script >alert("Warning!! This is not able to delete")</script>';
	}
?>