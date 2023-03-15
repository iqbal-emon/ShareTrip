<?php
include_once "admin_navbar.php";

?>

<html>
<head>
<title>Admin</title>
<style>
body{
background-color: lightgray;

}

</style>
<body>
<center>
<form method="post" enctype="multipart/form-data">
<table width="50%" border="2" cellpadding="5" cellspacing="5">
<thead>
<tr>
<th>Admin Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Edit</th>
<th>Delete</th>

</tr>
</thead>

<?php
include_once "connection.php";
include_once "admin_function.php";


$sql = "SELECT * from admin_server";
$result = mysqli_query($conn,$sql);

while($row= mysqli_fetch_array($result)){
?>
<tr>

<td> <?php echo $row["admin_name"]; ?> </td>
<td> <?php echo $row["admin_email"]; ?> </td>
<td> <?php echo $row["admin_phone"]; ?> </td>



<td><a href= "admin_update1.php? admin_email=<?php echo $row['admin_email'];?>
&& admin_name=<?php echo $row['admin_name'];?>
&& admin_phone=<?php echo $row['admin_phone'];?>
&& security_key=<?php echo $row['security_key'];?>">Edit</a></td>

<td><a href= "admin_delete.php? admin_email=<?php echo $row['admin_email'];?>">Delete</a></td>


</tr>
<?php
}
?>
</table>
</form>
<br>
<br>
<a href="admin_add.php"><button>Add Admin</button></a><br><br>

</center>

</body>
</head>
</html>