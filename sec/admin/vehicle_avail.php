<?php
include('../include/conn.php');
session_start();
if (isset($_POST['save'])){ 
    // prepare and bind
    // set parameters and execute
    $driver_id_no = $_POST['driver_id_no'];
    $admin_id_no = $_POST['admin_id_no'];
    $avail_vehicle_number_plate = $_POST['avail_vehicle_number_plate'];
    $avail_vehicle_place = $_POST['avail_vehicle_place'];
    $vehicle_Destination = $_POST['vehicle_Destination'];
    $departure_time = $_POST['departure_time'];
    $booked_seat = 0;
    $status = 'station';
    $date = date('Y-m-d H:i:s');
    $ticket_id = 'driver';
    $pri_key = uniqid();
    $seat_no = 'driver';
    $phone = '078465372';
    $ql = "SELECT * FROM driver where id_number='$driver_id_no' AND status='Approved'";
    $result = $conn->query($ql);
if ($result->num_rows > 0) {
    $l = "SELECT * FROM vehicles where number_plate='$avail_vehicle_number_plate' AND status='Approved'";
    $result = $conn->query($l);
    if ($result->num_rows > 0) {
        $sql = "INSERT INTO vehicle_avail (pri_key, driver_id_no, admin_id_no, avail_vehicle_number_plate, avail_vehicle_place, vehicle_Destination, departure_time, booked_seat, status, date) VALUES('$pri_key', '$driver_id_no', '$admin_id_no', '$avail_vehicle_number_plate', '$avail_vehicle_place', '$vehicle_Destination', '$departure_time', '$booked_seat', '$status', '$date')";
        if($conn->query($sql) === TRUE) {
            $query = "INSERT INTO vehicle_seats (pri_key, number_plate, ticket_id, seat_no, phone, date) VALUES ('$pri_key', '$avail_vehicle_number_plate', '$ticket_id', '$seat_no', '$phone', '$date')";
            if($conn->query($query) === TRUE) {
            echo "<script>
                window.location='extra/route.php';
                alert('Vehicle saved successfully');
            </script>";
            } else {
                echo "Error: " . $query . "<br>" . $conn->error;  
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }
        }else{        
            echo "<script>alert('Number plate does not exist or Vehicle has not being aproved, kindly check and try again!'); 
        window.location='extra/route.php?unavailable';
        </script>";
    } 
    }else{        echo "<script>alert('Driver does not exist or driver has not being approved, kindly check and try again!'); 
        window.location='extra/route.php?unavailable';
        </script>";
    }
}
?>
