<?php
include_once("connection.php");





                $sql="SELECT* FROM food";
                $result=$conn->query($sql);
               
                    if($result->num_rows>0){
                        ?>
                        <h1 style="color:black;padding-left: 650px;">Select Your Food</h1>
                        <table class="table" style="background-color: rgb(36,98,141);display: flex;flex-direction: column;
  align-items: center;">
                            <thead class="thead-dark">
<tr style="font-weight: bold;">
    <th style="font-weight: bold; padding-left: 60px;">Food Name</th>
    <th style="font-weight: bold; padding-left: 95px;">Price</th>
    <th style="font-weight: bold; padding-left: 105px;">Picture</th>

    <th style="padding-left: 100px"></th>

</tr>

                            </thead>
                            <?php
                        while($row = $result->fetch_assoc()) {
                        //    echo $row['date'];
                           
                                    // if($row['date']==$datee){
                                    //     echo "hi";
                                   
                                // echo $row['date'];
                            // echo "Seat No: " . $row["seat_no"].    "price  " . $row["price"].    "<br>";
                                
                            // echo "Seat No: " . $row["seat_no"]. " - Type: " . $row["class"]. "Time " . $row["time"]. "<br>";
                            // $row['date']==$datee &&$row['location']==$location1
                            // &&$row['destination_']==$location2 
                            // echo  "Seat No: " '<td>' . $row['seat_no'] . '</td>';
                        ?>
                        
                           <tbody >
                               <tr >
                               <td style=" padding-left: 90px;"><?php echo $row['f_name']?> </td>
                               <td style=" padding-left: 120px;"><?php echo $row['f_price']?> </td>
                               <td style=" padding-left: 10%;">  <img src="<?php echo $row['f_image']; ?>" /> </td>
                                <td style="padding-left:10%;"> <a href="guide.html"><button> Buy</button></a></td>
                            </tr>
                        </tbody>
                   
                              
                        <?php
                            
                        }
                   
                        // }
                           
                            // else{
                            //     echo "not found match";
                            // }
                             ?>
                            <?php
                        }
                        
                    
                    
                        // ?>
<!-- else{
    die("This route has no seat available");
} -->

   
  





















