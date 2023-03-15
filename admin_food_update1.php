<html>
	<head>
		<title>Food</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
<body>
    <style>body {
  background-image: url('images/u1.jpg');
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
    

	
?>
<div style="margin-top:4cm;">

<h1 style="text-align:center; color:black">Update Record</h1>
    
<form  enctype="multipart/form-data" class="ui form" style="max-width: 500px; margin: 0 auto;" method=get action=admin_food_update2.php>
<div class="field">
    
    <input  type="hidden" name="f_id" value='<?php echo $id; ?>'>
    
  </div>
<div class="field">
    <label style="color:black">Food Name</label>
    <input style="background-color:red" type="text" name="f_name" value='<?php echo $name; ?>'>
  </div>
  

  <div class="field">
    <label style="color:black">Price</label>
    <input style="background-color:red" type="text" name="f_price" value='<?php echo $price; ?>'>
  </div>

  <div class="field">
    <label style="color:black">Food Photo</label>
    <input style="background-color:red" type="file" name="f_image" value='<?php echo $image; ?>'>
  </div>

    
  
  <button class="ui inverted red button" type="submit">Update</button>
</div>
</form>
</body>
</html>