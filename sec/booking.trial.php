<?php
session_start();
include('include/conn.php');
if (isset($_POST['submit'])){ 
    // prepare and bind
    // set parameters and execute
    $seat_no = $_POST['seat'];
    $ticket_id = uniqid();
    $phone = $_SESSION['phone'];
    $date = date('Y-m-d H:i:s');
    $plate_no = $_GET['plate_no'];
    $sql = "INSERT INTO vehicle_seats (number_plate, ticket_id, seat_no, phone, date) VALUES('$plate_no', '$ticket_id', '$seat_no', '$phone', '$date')";
    if($conn->query($sql) === TRUE) {
          
          $query = "SELECT * FROM vehicle_seats WHERE number_plate = '$plate_no'";
            if ($resul=mysqli_query($conn,$query)){
              $rowcount=mysqli_num_rows($resul);
              $rowcount= ($rowcount - 1);
              if ($rowcount == 16  ){
                echo "<script>alert('gani'); </script>";
                //$query = "UPDATE vehicle_avail SET booked_seat = 'Full' WHERE avail_vehicle_number_plate = '$plate_no'";  
              }else{
                echo "<script>alert('ala'); </script>";
                //$booked_seat= ($rowcount + 1);
                //$query = "UPDATE vehicle_avail SET booked_seat = '$booked_seat1' WHERE avail_vehicle_number_plate = '$plate_no'";
                  //      echo "<script>
                  //  window.location='#confirm.php?date=$date&departure=$departure&start=$start&ticket_id=$ticket_id&end=$end&phone=$phone&price=$price&seat_no=$seat_no&plate_no=$plate_no';
                //</script>";
               }
    } 
}else {
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }
}
?>