<?php
session_start();
include ('include/conn.php');
if (isset($_POST['delete'])){
$ticket_id = $_POST['ticket_id'];
$sql = "DELETE * FROM vehicle_seats WHERE ticket_id = '$ticket_id' AND phone = '$phone'"; 
$answer = mysqli_query($conn, $sql);
    if (mysqli_num_rows($answer) > 0) {
        echo "
        <script>
            window.location='index.php?deleted_successfuly';
        </script>
        ";        
    } else {
        echo "Error deleting record: " . $conn->error;
    }
$conn->close();
}
?>