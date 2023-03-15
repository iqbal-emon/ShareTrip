<?php
function check_login($conn)
{
if(isset($_SESSION['g_email']))
{
$id = $_SESSION['g_email'];
$query = "SELECT * from guide where g_email = '$id' limit 1";

$result = mysqli_query($conn,$query);
if($result && mysqli_num_rows($result)>0)
{
$user = mysqli_fetch_assoc($result);
return $user;
}
}
else{
header("Location: guide_login.php");
die;
}
}