<?php
include('../../include/conn.php');
if (isset($_POST['new_user'])){ 
    // prepare and bind
    // set parameters and execute
    $phone1 = $_POST['phone'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    echo "<script>
            window.location='customer.php?phone=$phone1&fname=$fname&lname=$lname';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;  
}?>