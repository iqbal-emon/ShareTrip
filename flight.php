<?php
include_once("connection.php");


               $location1= $_POST['ma1'];
              $location2=$_POST['ma2'];
              $datee=$_REQUEST['ma3'];
             $members1=$_REQUEST['ma4'];
            $class=$_REQUEST['ma5'];
           
            // echo $location1;
            // echo $location2;
           
            
            $datee= date('Y-m-d', strtotime($_POST["ma3"]));
// $datee = date_create($datee);
//  date_format($datee, 'Y-m-d ');
//  echo $datee;
// echo $datee;


                $sql="SELECT* FROM vehicle join seat WHERE vehicle.v_code=seat.v_code ";
                $result=$conn->query($sql);
               
                    if($result->num_rows>0){
                        ?>
                        <h1 style="color:black;padding-left: 650px;">Select Your Ticket</h1>
                        <table class="table" style="background-color: rgb(36,98,141);display: flex;flex-direction: column;
  align-items: center;">
                            <thead class="thead-dark">
<tr style="font-weight: bold;">
    <th style="font-weight: bold; padding-left: 60px;">Seat No</th>
    <th style="font-weight: bold; padding-left: 95px;">Class</th>
    <th style="font-weight: bold; padding-left: 105px;">Time</th>
    <th style="font-weight: bold; padding-left: 100px;">Price</th>
    <th style="padding-left: 100px"></th>
    <!-- <th style="padding-left: 100px"></th> -->

</tr>

                            </thead>
                            <?php
                        while($row = $result->fetch_assoc()) {
                            // echo $row['location'];
                            // echo $row['destination'];
                            // echo $datee;
                            if($row['destination']==$location2)
                            { 
                                
                            if($row['location']==$location1){
                             
                                if($row['class']==$class){
                                   
                                    // echo $row['date'];
                                    if($row['date']==$datee){
                                       
                                        if($row['v_name']=='flight'){
                                        // echo "hello";
                                    
                                
                                
                                   
                                // echo $row['date'];
                            // echo "Seat No: " . $row["seat_no"].    "price  " . $row["price"].    "<br>";
                                
                            // echo "Seat No: " . $row["seat_no"]. " - Type: " . $row["class"]. "Time " . $row["time"]. "<br>";
                            // $row['date']==$datee &&$row['location']==$location1
                            // &&$row['destination_']==$location2 
                            // echo  "Seat No: " '<td>' . $row['seat_no'] . '</td>';
                        ?>
                           <tbody style="border:2px solid coral;">
                               <!-- <tr style="border:1px solid red"> -->
                               <td style=" padding-left: 100px;"><?php echo $row['seat_no']?> </td>
                               <td style=" padding-left: 120px;"><?php echo $row['class']?> </td>
                               <td style=" padding-left: 95px;"><?php echo $row['time']?> </td>
                               <td style=" padding-left: 100px;"><?php echo $row['price']?> </td>
                               <td style="padding-left:100px;"><a href="guide.html"><button style="background-color:red" >Buy</button></a></td>

                               </tr>
                           </tbody>
                              
                        <?php
                                    }
                            }
                        }}
                        }}
                           
                            // else{
                            //     echo "not found match";
                            // }
                             ?>
                            <?php
                        }
                        
                    // }
                    
                        // ?>
<!-- else{
    die("This route has no seat available");
} -->

   
  





















