<?php
include_once("connection.php");

$information= $_POST['Infor'];
echo $information;
    
        $sql="INSERT INTO guidetable (Want guide) VALUES ('$information')";


 ?>
<h1>database is connect</h1>