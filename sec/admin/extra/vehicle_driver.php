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
    <script type="text/javascript" src="../../include/js/jquery-1.10.2.min.js" ></script>
    <style>
    </style>
</header>    
<body style="background-color:#000;" oncontextmenu="return false;">
<div class="container">
    <div class="row mt-2">
        <div class="col-md-4 p-2" style="box-shadow: 1px 1px 4px 0px green;">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-12 text-center text-success">
                        <h4>Driver Registration</h4>
                    </div>
                </div>
                <div class="row text-light">
                    <div class="col-xm-4 col-sm-4 col-md-4">
                        <label>First Name:<i class="text-danger">*</i></label>
                        <input type="text" name="fname" class="form-control bg-transparent" required autocomplete="off">
                    </div>
                    <div class="col-xm-4 col-sm-4 col-md-4">
                        <label>Last Name:<i class="text-danger">*</i></label>
                        <input type="text" name="lname" class="form-control bg-transparent" required autocomplete="off">
                    </div>
                    <div class="col-xm-4 col-sm-4 col-md-4">
                        <label>ID Number:<i class="text-danger">*</i></label>
                        <input type="number" name="id_number" class="form-control bg-transparent" required autocomplete="off">   
                    </div>
                </div>
                <div class="row text-light">
                    <div class="col-xm-6 col-sm-6 col-md-6">
                        <label>Phone:<i class="text-danger">*</i></label>
                        <input type="tel" name="phone" class="form-control bg-transparent" required autocomplete="off">
                    </div>
                    <div class="col-xm-6 col-sm-6 col-md-6">
                        <label>email:<i class="text-danger">*</i></label>
                        <input type="email" name="email" class="form-control bg-transparent" required autocomplete="off">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-12">
                        <center><input type="submit" class="btn btn-success bg-transparent" name="save" value="Save Driver"></center>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



               

</script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

<!-- Bootstrap JS Requirements -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php
include('../../include/conn.php');
if (isset($_POST['save'])){
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $id_number = $_POST['id_number'];
    $sql = "SELECT * FROM driver where id_number='$id_number' or email='$email' or phone='$phone'";
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
        echo "<script>alert('User Details Exists!'); 
        window.location='vehicle_driver.php?exists';
        </script>";
    }else{
// prepare and bind
$stmt = $conn->prepare("INSERT INTO driver (fname,lname,id_number,phone,email,trips,status,join_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssiissss", $fname, $lname, $id_number, $phone, $email, $trips, $status, $join_date);

// set parameters and execute
$id_number = $_POST['id_number'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$trips = 0;
$status = 'pending';
$join_date = date('Y-m-d H:i:s');
$stmt->execute();
echo "
    <script>
        alert('Driver Saved successfuly');
        window.location='vehicle_driver.php?success';
    </script>";

$stmt->close();
$conn->close();
    }
}
?>
