<?php
include_once "connection.php";
include_once "admin_function.php";


$sql = "SELECT * from food";
$result = mysqli_query($conn,$sql);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
    <link rel="stylesheet" href="css3/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css3/templatemo-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
<body style="background: black;">
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/f.jpg">
        
    </div>
    
    <div class="container-fluid tm-container-content tm-mt-60">
        
        <div class="row tm-mb-90 tm-gallery">
        <?php
while($row= mysqli_fetch_array($result)){
?>
        	<div  class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure  class="effect-ming tm-video-item">
                    <img style="margin-left: 1.5cm" src="<?php echo $row["f_image"]; ?>" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2><?php echo $row["f_name"]; ?></h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span>Price : <?php echo $row["f_price"]; ?></span>
                    <button class="ui inverted brown button"><a href="admin_food_update1.php? f_name=<?php echo $row['f_name'];?>
&& f_price=<?php echo $row['f_price'];?>
&& f_image=<?php echo $row['f_image'];?>
&& f_id=<?php echo $row['f_id'];?>"><span>Modify</span></a></button>
                    <button class="ui inverted brown button"><a href="admin_food_delete.php? f_id=<?php echo $row['f_id'];?>"><span>Remove</span></a></button>
                </div>
            </div>
            <?php
            }
        ?>
        </div> <!-- row -->
        
    </div> <!-- container-fluid, tm-container-content -->
    
       
    <button class="ui inverted brown button" style="margin-left: 20cm;"><a href="Site4/admin_food_add.php"><span>Add Food</span></a></button>
        <button class="ui inverted brown button" style="margin-left: -22cm;"><a href="admin_menu.php"><span>Go Back</span></a></button>
        
    <script src="js3/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>