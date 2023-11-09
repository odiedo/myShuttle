<?php
include('../include/conn.php');
if (isset($_POST['save'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $id_number = $_POST['id_number'];
    $station = $_POST['station'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $sql = "SELECT phone, id_number, email FROM admin where phone='$phone' or email='$email' or id_number='$id_number' ";
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
        echo "<script>alert('Sorry! User exists'); 
        window.location='sign_up.php';
        </script>";
    }else{
// prepare and bind
$stmt = $conn->prepare("INSERT INTO admin (fname,lname,station,id_number,phone,email,password,join_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssiisss", $fname, $lname, $station, $id_number, $phone, $email, $password, $join_date);

// set parameters and execute
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $id_number = $_POST['id_number'];
    $station = $_POST['station'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
$password = password_hash($pass, PASSWORD_DEFAULT);
$join_date = date('Y-m-d H:i:s');
$stmt->execute();
echo "
    <script>
        window.location='index.php?success';
    </script>";

$stmt->close();
$conn->close();
    }
}
?>
