<?php
    include ('../../include/conn.php');
    ini_set('session.gc_maxlifetime', 1440); 
    session_start();
    if(empty($_SESSION['id_number'])){
        header("Location: ../../login/index.php");
        exit();
    }else{
?>
<!DOCTYPE html>
<header>
    <title>Eldoret Shuttle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
        <!-- to be deleted -->
    <link href="../../../../hostels/hostel/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../../../hostels/hostel/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../../hostels/hostel/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- External CSS libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
        <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="style.css">
    <link type="text/css" rel="stylesheet" href="include/style.css">
    <script type="text/javascript" src="include/js/jquery-1.10.2.min.js" ></script>
</header>    
<body style="background-color:#000;" oncontextmenu="return false;">
<?php
$id = $_GET['id'];
$plate = $_GET['plate'];
$sql = "SELECT * FROM vehicle_avail where avail_id='$id' AND avail_vehicle_number_plate ='$plate'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    $plate = $row['avail_vehicle_number_plate'];
    $from = $row['avail_vehicle_place'];
    $to = $row['vehicle_destination'];
    $seats = $row['booked_seat'];
    $pri_key = $row['pri_key'];
    $seats = $row['booked_seat'];
    $dep = $row['departure_time'];
    $admin_id_no = $row['admin_id_no'];
    $driver_id_no = $row['driver_id_no'];
    ?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4">
            <fieldset class="text-warning p-1" style="border-radius: 10px; border: 1px solid red; font-size: 12px;">
              <legend class="text-center">
                  <strong>Confirm</strong>
              </legend>
              <span class="text-light pl-3"><strong>Vehicle: </strong> </span> <?php echo $plate; ?><br>
              <span class="text-light pl-3"><strong>From: </strong></span> <?php echo $from; ?><br>
              <span class="text-light pl-3"><strong>To: </strong></span> <?php echo $to; ?><br>
              <span class="text-light pl-3"><strong>Booked Seats: </strong></span> <?php echo $seats; ?>/16<br>
              <span class="text-light pl-3"><strong>Departure: </strong></span> <?php echo $dep; ?>
            </fieldset><br>
            <div class="alert bg-transparent border-warning text-light alert-dismissible" style="font-family:cursive; font-size: 10px;">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>This is a critical process!</strong> Please enter the driver ID and your ID to confirm vehicle <strong>exit</strong> at the station.
            </div>
            <form method="POST" action="">
                <div style="font-family:cursive; font-size: xx-small; ">
                    <input type="number" name="id" value="<?php echo $id; ?>">
                    <input type="text" name="pri_key" value="<?php echo $pri_key; ?>" hidden>
                    <input type="text" name="from" value="<?php echo $from; ?>" hidden>
                    <input type="text" name="to" value="<?php echo $to; ?>" hidden>
                    <input type="number" name="seats" value="<?php echo $seats; ?>" hidden>
                    <input type="number" name="admin_id_no" value="<?php echo $admin_id_no; ?>">
                    <input type="number" name="driver_id_no" value="<?php echo $driver_id_no; ?>" >
                    <input type="password" name="password" placeholder="Password" class="form-control"><br>
                    <button name="confirm" class="btn btn-success text-success bg-transparent fa fa-check"> Confirm</button></center></form>
                    <center><button onclick="window.history.back();" class="btn btn-danger text-danger bg-transparent fa fa-times"> Cancel</button>
                </div>
		</div>
		<div class="col-md-4">
			
		</div>
	</div>
</div>
<?php
} 
}else{
    echo "
        <script>
            alert('There is an error. Plese try again!');
        </script>
    ";
}

if (isset($_POST['confirm'])) {
    $id = $_POST['id'];
    $pri_key = $_POST['pri_key'];
    $id_number = $_POST['admin_id_no'];
    $driver_id_no = $_POST['driver_id_no'];
    $start = $_POST['from'];
    $end = $_POST['to'];
    $seats = $_POST['seats'];
    $date = date('Y-m-d H:i:s');
    $password = $_POST['password'];
    $query = mysqli_query($conn, "SELECT id_number, password FROM admin WHERE id_number = '$id_number'");
    $result = mysqli_fetch_assoc($query);
    if (mysqli_affected_rows($conn) == 1){
        if (password_verify($password, $result['password'])) {
         $sql = "SELECT * FROM vehicle_avail WHERE avail_id='$id' AND pri_key='$pri_key'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $query = "UPDATE vehicle_avail SET status='left' WHERE avail_id='$id' and pri_key='$pri_key'";
                if($conn->query($query) == TRUE){
                    $q = "INSERT INTO trips (pri_key, id_number, driver_id_no, plate, start, end, seats, date) VALUES ('$pri_key', '$id_number', '$driver_id_no', '$plate', '$start', '$end', '$seats', '$date')";
                        if($conn->query($q) === TRUE) {
                            $res = $conn->query($q);
                            echo "<script>alert('Exit successful!'); 
                                        window.location='vehicle_release.php?successful';
                                    </script>";
                        } else {
                            echo "Error: " . $q . "<br>" . $conn->error;  
                    }
                } else {
                    echo "Error: " . $query . "<br>" . $conn->error;
                }
            }else {
                echo "<script>
                alert('Failed to update. Kindly try again!'); 
                window.location='#vehicle_release.php?error';
                </script>";
            }
        } else {
            echo "<script>window.location='vehicle_release.php?error=Wrong_password+';";
            echo "alert('Wrong password. Please check your password!!!');</script>";
        }
    } else {
        echo "alert('Failed to collect data. Kindly try again');</script>";
        echo "<script>window.location='vehicle_release.php?error';";
    }
}
}
$conn->close();
?>