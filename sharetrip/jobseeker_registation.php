<?php

include_once "connection.php";

if($_SERVER['REQUEST_METHOD'] =="POST")
{
$email = $_POST['j_email'];
$name = $_POST['j_name'];
$age = $_POST['j_age'];
$phone = $_POST['j_phone'];

$filename = $_FILES['j_image']['name'];
  $filetempname =$_FILES['j_image']['temp_name'];
  //$folder = 'guideimage/';
  
  //move_uploaded_file($filetempname,$folder.$filename);
$fileExt = explode('.',$filename);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg','jpeg','png');

$filenameNew = uniqid('',true).".".$fileActualExt;
$fileDestination = 'images/'.$filenameNew;
move_uploaded_file($filetempname,$fileDestination);

if(!empty($email) && !empty($name) && !empty($age)&& !empty($phone))
{
  



$sql =    "INSERT into jobseeker(j_email,j_name,j_age,j_phone,j_image) 
            values('$email','$name','$age','$phone','$filename')";

mysqli_query($conn,$sql);
header("Location: jobseeker_registation_successfull.php");
die;
}
else
{
  echo '<script >alert("Warning!! Try Again With Valid Information")</script>';
}
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Applying</title>

    <!-- Icons font CSS-->
    <link href="vendor1/mdi-font/css1/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor1/font-awesome-4.7/css1/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css1?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor1/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor1/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css1/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Applying for job as guide</h2>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Full Name" name="j_name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="number" placeholder="age" name="j_age">
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="j_email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone number" name="j_phone">
                        </div>
                        <div>
                            <input class="input--style-3" type="file" name="j_image" />
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Submit</button>
                            
                        </div>
                        
                    </form>
                    <div class="p-t-10">
                        <button class="btn btn--pill btn--green"><a href="guide_login.php">Log in</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor1/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor1/select2/select2.min.js"></script>
    <script src="vendor1/datepicker/moment.min.js"></script>
    <script src="vendor1/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js1/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->