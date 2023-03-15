<?php
include_once("connection.php");


               $location1= $_REQUEST[''];
              $location2=$_REQUEST[''];
              $datee=$_REQUEST[''];
             $members1=$_REQUEST[''];
            $class=$_REQUEST[''];

// echo $datee;


                $sql="SELECT* FROM vehicle join seat WHERE vehicle.v_code=seat.v_code ";
                $result=$conn->query($sql);
               
                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()) {
                            if($row['destination_']==$location2 ){
                            echo "Vehicle Id: " . $row["v_code"]. " - Seat No: " . $row["seat_no"]. "price " . $row["price"]. "<br>";
                                
                            echo "Vehicle Id: " . $row["v_code"]. " - Type: " . $row["v_name"]. "Time " . $row["time"]. "<br>";
                            // $row['date']==$datee &&$row['location']==$location1
                            // &&$row['destination_']==$location2 
                        

                        }
                        else{
                            echo "not found match";
                        }
                        }
                       }
else{
    die("This route has no seat available");
}

   
  




















?>
