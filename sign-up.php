<?php
include('sec/include/conn.php');
if (isset($_POST['save'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $sql = "SELECT * FROM passengers where phone='$phone' or email='$email'";
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
        echo "<script>alert('sorry user exists'); 
        window.location='reg.php';
        </script>";
    }else{
// prepare and bind
$stmt = $conn->prepare("INSERT INTO passengers (fname,lname,phone,email,password,join_date) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssisss", $fname, $lname, $phone, $email, $password, $join_date);

// set parameters and execute
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['password'];
$password = password_hash($pass, PASSWORD_DEFAULT);
$join_date = date('Y-m-d H:i:s');
$stmt->execute();
echo "
    <script>
        window.location='index.php';
    </script>";

$stmt->close();
$conn->close();
    }
}
?>
