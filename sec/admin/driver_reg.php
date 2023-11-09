<?php
include('../include/conn.php');
if (isset($_POST['save'])){
    $phone = $_POST['phone'];
    $id_number = $_POST['id_number'];
    $sql = "SELECT * FROM driver where id_number='$id_number'";
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
        echo "<script>alert('Vehicle Exists!'); 
        window.location='extra/vehicle.php';
        </script>";
    }else{
// prepare and bind
$stmt = $conn->prepare("INSERT INTO driver (fname,lname,id_number,phone,email,trips,status,join_date) VALUES (?, ?, ?. ?, ?, ?, ?, ?)");
$stmt->bind_param("ssiisiss", $fname, $lname, $id_number, $phone, $email, $trips, $status, $join_date);


// set parameters and execute
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $id_number = $_POST['id_number'];
$trips = 0;
$status = 'pending';
$join_date = date('Y-m-d H:i:s');
$stmt->execute();
echo "
    <script>
        window.location='extra/vehicle_driver.php';
    </script>";

$stmt->close();
$conn->close();
    }
}
?>
