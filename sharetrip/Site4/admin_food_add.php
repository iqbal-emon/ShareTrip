<?php
include_once "../connection.php";
include_once "../admin_function.php";

if($_SERVER['REQUEST_METHOD'] =="POST")
{
$name = $_POST['f_name'];
$price = $_POST['f_price'];

$filename = $_FILES['f_image']['name'];
  $filetempname =$_FILES['f_image']['temp_name'];
  //$folder = 'guideimage/';
  
  //move_uploaded_file($filetempname,$folder.$filename);
$fileExt = explode('.',$filename);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg','jpeg','png');

$filenameNew = uniqid('',true).".".$fileActualExt;
$fileDestination = 'images/'.$filenameNew;
move_uploaded_file($filetempname,$fileDestination);

if(!empty($name) &&  !empty($price))
{
  



$sql =    "INSERT into food(f_name,f_price,f_image) 
            values('$name','$price','$filename')";

mysqli_query($conn,$sql);
header("Location: ../admin_food.php");
die;
}
else
{
  echo '<script >alert("Warning!! Try Again With Valid Information")</script>';
}
}

?>


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Food</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Contact.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.9.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Contact">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Contact.html" data-home-page-title="Contact" class="u-body u-xl-mode">
    <section class="u-clearfix u-video u-section-1" id="sec-d385">
      <div class="u-background-video u-expanded" style="">
        <div class="embed-responsive embed-responsive-1">
          <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="https://www.youtube.com/embed/PZ4pctQMdg4?playlist=PZ4pctQMdg4&amp;loop=1&amp;mute=1&amp;showinfo=0&amp;controls=0&amp;start=0&amp;autoplay=1" data-autoplay="1" frameborder="0" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-border-2 u-border-palette-4-dark-1 u-form u-gradient u-radius-39 u-form-1">
        
        <form method="POST" enctype="multipart/form-data" style="padding: 50px;">
                        <div class="u-form-group u-form-name">
                            <input style="margin-bottom : 1cm;" id="name-79b3" class="u-border-1 u-border-grey-30 u-gradient u-input u-input-rectangle u-text-white u-input-1" type="text" placeholder="Food name" name="f_name">
                        </div>
                        <div class="u-form-group u-form-name">
                            <input style="margin-bottom : 1cm;" id="name-79b3" class="u-border-1 u-border-grey-30 u-gradient u-input u-input-rectangle u-text-white u-input-1" type="number" placeholder="price" name="f_price">
                        </div>
                        
                        <div class="u-form-group u-form-name">
                            <input style="margin-bottom : 1cm;" id="name-79b3" class="u-border-1 u-border-grey-30 u-gradient u-input u-input-rectangle u-text-white u-input-1" type="file" name="f_image" />
                        </div>
                        <div class="p-t-10">
                            <button class="u-btn u-btn-round u-btn-submit u-button-style u-hover-custom-color-2 u-palette-1-base u-radius-38 u-btn-1" type="submit">Submit</button>
                            
                        </div>
                        
                    </form>
        
        
        
        
        
          <button class="u-btn u-btn-round u-btn-submit u-button-style u-hover-custom-color-2 u-palette-1-base u-radius-38 u-btn-1" style="margin-left: 1.1cm; margin-bottom: 0.5m;"><a href="../admin_food.php">Go Back</a></button>
          
        </div>
      </div>
    </section>
    
    
    
  </body>
</html>