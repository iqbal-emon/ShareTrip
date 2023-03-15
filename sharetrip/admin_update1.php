<html>
	<head>
		<title>Admin's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
  <style>body {

background-image: url('images/u1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<body >
    
 
<?php

    include_once "connection.php";
    include_once "admin_function.php";

    $admin_email = $_GET["admin_email"];
	$name  = $_GET["admin_name"];
    $phone = $_GET["admin_phone"];
	$security_key = $_GET["security_key"];
    

	
?>
<div style="margin-top:4cm;">
<h1 style="text-align:center;">Update Record</h1>
    
<form class="ui form" style="max-width: 500px; margin: 0 auto;" method=get action=admin_update2.php>


<div class="field">
    
    <input type="hidden" name="admin_email" value='<?php echo $admin_email; ?>'>
    
  </div>
<div class="field">
    <label style="color:black;">Full Name</label>
    <input style="background-color:red"type="text" name="admin_name" value='<?php echo $name; ?>'>
  </div>
  

  <div class="field">
    <label style="color:black">Phone Number</label>
    <input style="background-color:red" type="text" name="admin_phone" value='<?php echo $phone; ?>'>
  </div>

  <div class="field">
    <label style="color:black">Security Key</label>
    <input style="background-color:red"type="text" name="security_key" value='<?php echo $security_key; ?>'>
  </div>
    
  
  <button class="ui inverted blue  button" type="submit">Update</button>
</form>
</div>
</body>
</html>