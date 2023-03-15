<?php

include_once "../connection.php";
include_once "../admin_function.php";


if($_SERVER['REQUEST_METHOD'] =="POST")
{
    
    $name  = $_POST['v_name'];
    $location = $_POST['location'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $email = $_GET['g_email'];
    $code = $_POST['v_code'];

    $normal = $_POST['normal'];
    $second = $_POST['second'];
    $first = $_POST['first'];

    $query = "INSERT INTO vehicle(location, destination, date, time, v_name, g_email,v_code) 
    VALUES ('$location','$destination','$date','$time','$name','$email','$code')";
    $query_run = mysqli_query($conn, $query);

    if($name=='bus'){
        $price = 500;
    }
    else if($name=='train'){
        $price = 300;
    }
    else{
        $price = 2500;
    }

    for($i =0; $i<$normal; $i++){
        $query2 = "INSERT INTO seat(class, v_code, price) 
        VALUES ('normal','$code','$price')";
        $query_run2 = mysqli_query($conn, $query2);

    }
    for($i =0; $i<$second; $i++){
        $price = $price*1.5;
        $query3 = "INSERT INTO seat(class, v_code, price) 
        VALUES ('second','$code','$price')";
        $query_run3 = mysqli_query($conn, $query3);
        $price = $price/1.5;
    }
    for($i =0; $i<$first; $i++){
        $price = $price*3;
        $query4 = "INSERT INTO seat(class, v_code, price) 
        VALUES ('first','$code','$price')";
        $query_run4 = mysqli_query($conn, $query4);
        $price = $price/3;
    }
    if($query_run)
    {
        
        header("Location: transport/transport_location.php");
    }
    else{
        echo '<script >alert("Warning!! Unable to Update Information")</script>';
    }
}

?>



<!DOCTYPE html>
 <html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Transport</title>
        <meta name="description" content="">

        <meta name="viewport" content="width=device-width">
		<meta name="author" content="templatemo">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        

        <div class="site-header">
            <div class="container">
                
               
                
           
      <form method="post">
        <div style="margin-left: -3cm; margin-top: 3.5cm; font-size: 30px;color:beige" class="row">
            <h1 style="color:#E3EB0E; font-size:45px;"><b>Pick Vehicle </b></h1><br><br>

               <input type="radio" id="html" name="v_name" value="bus">
               <label for="bus">Bus</label><br><br>
                 <input type="radio" id="css" name="v_name" value="train">
               <label for="train">Train</label><br><br>
          <input type="radio" id="javascript" name="v_name" value="flight">
                <label for="flight">Flight</label><br> <br> 
        </div> 

        <div style="margin-left: 10cm; margin-top: -8cm; font-size: 20px;color:beige" class="row">
        <label style="color:#E3EB0E;" class='fas fa-location-arrow' for="bus"> Current Location</label><br><br>
          <input  type="text"  name="location" placeholder="Enter Location" >
               <br><br><br>

            <label style="color:#E3EB0E;" class='fas fa-map-marker-alt' for="train">  Destination Location</label><br><br>
          <input type="text"  name="destination" placeholder="Enter Destination">
               <br><br><br>

<label style="color:#E3EB0E;" class='far fa-calendar-alt' >  Date</label><br><br>
          <input type="date"  name="date" placeholder="Enter Date">
               <br><br><br>

<label style="color:#E3EB0E;" class='fas fa-hourglass-end' >  Time</label><br><br>
          <input type="time"  name="time" placeholder="Enter Time">
               <br><br><br>

        </div>  

        <div style="margin-left: 26cm; margin-top:-14cm; font-size: 20px;color:beige" class="row">
        <label style="color:#E3EB0E;margin-left:0.7cm">Normal Class</label><br><br>
          <input  type="number"  name="normal" placeholder="Enter Seat Number" >
               <br><br><br>

<label style="color:#E3EB0E; margin-left:0.7cm">Second Class <span>(AC)</span></label><br><br>
          <input type="number"  name="second" placeholder="Enter Seat Number">
               <br><br><br>

            <label style="color:#E3EB0E; margin-left:0.7cm">First Class(VIP)</label><br><br>
          <input type="number"  name="first" placeholder="Enter Seat Number">
               <br><br><br>
<label style="color:#E3EB0E; margin-left:0.7cm">Vehicle Code</label><br><br>
          <input type="number"  name="v_code" placeholder="Enter code">
               <br><br><br>



        </div>  
    <input name="submit"style="margin-left: 29cm; font-size: 25px;" type="submit" value="submit" class="ui inverted olive basic button">
    
    
        
</form>

            
                 
                

         
            </div> 
        </div>


        <div class="flexslider">
            <ul class="slides">
                <li>
                    <div class="overlay"></div>
                    <img src="images/templatemo_slide_1.jpg" alt="Special 1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="overlay"></div>
                    <img src="images/templatemo_slide_2.jpg" alt="Special 2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="overlay"></div>
                    <img src="images/templatemo_slide_3.jpg" alt="Special 3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                               
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div> <!-- /.flexslider -->

        <?php 

$query = "SELECT * from guide";
$query_run = mysqli_query($conn, $query);

if($query_run)
{
    

        ?>
        
        <div class="container">
            <div class="row">
                <div class="our-listing owl-carousel">
                    
                    
                <?php 
while($row= mysqli_fetch_array($query_run)){


?>
                    
                    
                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>Guide</h4>
                            </div>
                            <img src="../<?php echo $row["g_image"]; ?>" alt="image of guide"/>
                        </div> <!-- /.list-thumb -->
                        <div class="list-content">
                            <h5><?php echo $row["g_name"]; ?></h5>
                            <span><?php echo $row["g_phone"]; ?></span> <br> Age :
                            <span><?php echo $row["g_age"]; ?></span>
                            <a href="transport_name.php?g_email=<?php echo $row["g_email"]; ?>" class="price-btn">Assign</a>
                        </div> <!-- /.list-content -->
                    </div> <!-- /.list-item -->
                    <?php 
}

?>
                </div> <!-- /.our-listing -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->

		<?php 
}

?>
                    
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.partner-list -->

		

       

        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <!-- templatemo 409 travel -->  
    </body>
</html>