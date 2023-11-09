<?php
include ('include/conn.php');
if (isset($_POST['new_user'])){ 
    // prepare and bind
    // set parameters and execute
    $phone1 = $_POST['phone'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pri_key = $_POST['pri_key'];
    $plate_no = $_POST['plate_no'];
    $price = $_POST['price'];
    echo "<script>
            window.location='extra_pass.php?pri_key=$pri_key&plate_no=$plate_no&phone=$phone1&fname=$fname&lname=$lname&price=$price';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }?>