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

	$name  = $_GET["f_name"];
    $price = $_GET["f_price"];
	$image = $_GET["f_image"];
    $id = $_GET["f_id"];

	$query 	= "UPDATE food
     SET f_name='$name', 
     f_price='$price',
      f_image='$image',
      f_id='$id'

       WHERE f_id= '$id' ";


	$result = mysqli_query($conn, $query);
    if($result){
     header("Location:admin_food.php");
        die;
    }
    
		

?>
</body>
</html>