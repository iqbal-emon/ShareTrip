<?php
include_once("connection.php");


               $location1= $_REQUEST['ma1'];
              $location2=$_REQUEST['ma2'];
              $datee=$_REQUEST['ma3'];
             $members1=$_REQUEST['ma4'];
            $class=$_REQUEST['ma5'];


            $sql="SELECT* FROM vehicle join seat WHERE vehicle.v_code=seat.v_code ";
            $result=$conn->query($sql);
           
                if($result->num_rows>0){
                    ?>
                        <h1 style="color:black;padding-left: 650px;">Select Your Ticket</h1>

                    <table class="table" style="background-color: rgb(36,98,141);display: flex;flex-direction: column;
align-items: center;">
                        <thead class="thead-dark">
<tr style="font-weight: bold;">
<th style="font-weight: bold; padding-left: 100px;">Seat No</th>
<th style="font-weight: bold; padding-left: 90px;">Class</th>
<th style="font-weight: bold; padding-left: 100px;">Time</th>
<th style="font-weight: bold; padding-left: 100px;">Price</th>
</tr>

                        </thead>
                        <?php
                    while($row = $result->fetch_assoc()) {
                        if($row['destination_']==$location1)
                        {
                         
                            
                        if($row['location']==$location2){
                           
                            if($row['class']==$class){
                               
                            
                            // echo $row['date'];
                        // echo "Seat No: " . $row["seat_no"].    "price  " . $row["price"].    "<br>";
                            
                        // echo "Seat No: " . $row["seat_no"]. " - Type: " . $row["class"]. "Time " . $row["time"]. "<br>";
                        // $row['date']==$datee &&$row['location']==$location1
                        // &&$row['destination_']==$location2 
                        // echo  "Seat No: " '<td>' . $row['seat_no'] . '</td>';
                    ?>
                       <tbody>
                           <tr>
                           <td style=" padding-left: 100px;"><?php echo $row['seat_no']?> </td>
                           <td style=" padding-left: 120px;"><?php echo $row['class']?> </td>
                           <td style=" padding-left: 95px;"><?php echo $row['time']?> </td>
                           <td style=" padding-left: 100px;"><?php echo $row['price']?> </td>

                           </tr>
                       </tbody>
                          
                    <?php
                        }
                    }}
                       
                        // else{
                        //     echo "not found match";
                        // }
                         ?>
                        <?php
                    }
                    
                }
                
                    // ?>
<!-- else{
die("This route has no seat available");
} -->


