<?php
include('../include/conn.php');
if (isset($_POST['save'])){ 
    // prepare and bind
    // set parameters and execute
    $start = $_POST['start'];
    $end = $_POST['end'];
    $price = $_POST['price'];
    $date = date('Y-m-d H:i:s');

    $sql = "INSERT INTO routes (start, end, price, date) VALUES('$start', '$end', '$price', '$date')";
    if($conn->query($sql) === TRUE) {
        echo "<script>
            window.location='extra/route_insertion.php';
            alert('Route saved successfully');
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }
}
?>
