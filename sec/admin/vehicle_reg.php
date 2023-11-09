<?php
include('../include/conn.php');
if (isset($_POST['save'])){
    $number_plate = $_POST['number_plate'];
    $sql = "SELECT * FROM vehicles where number_plate='$number_plate'";
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
        echo "<script>alert('Vehicle Exists!'); 
        window.location='extra/vehicle.php';
        </script>";
    }else{
// prepare and bind
$stmt = $conn->prepare("INSERT INTO vehicles (number_plate,trips,status,join_date) VALUES (?, ?, ?, ?)");
$stmt->bind_param("siss", $number_plate, $trips, $status, $join_date);

// set parameters and execute
$number_plate = $_POST['number_plate'];
$trips = 0;
$status = 'pending';
$join_date = date('Y-m-d H:i:s');
$stmt->execute();
echo "
    <script>
        alert('Vehicle registered successfuly');
        window.location='extra/vehicle.php';
    </script>";

$stmt->close();
$conn->close();
    }
}
?>
