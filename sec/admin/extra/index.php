<?php
    include ('../../include/conn.php');
    ini_set('session.gc_maxlifetime', 1440); 
    session_start();
    if(empty($_SESSION['phone'])){
        header("Location: ../../index.php");
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
<body style="background-color: #000;" oncontextmenu="return false;">
<div class="container">
  <div class="row">
    <div class="col-md-4 mt-4">
        <fieldset class="text-light text-center p-4 mt-4" style="border: 1px solid orange; box-shadow: 2px 4px 4px 0px orange;">
            <legend class="h6"><i class="fa fa-edit"></i> Book Seat</legend>
            <a href="new_user.php" class="btn btn-warning bg-transparent text-warning p-4 mb-2 w-100">New User</a><br>
            <a href="#existing_user.php" class="btn btn-success bg-transparent text-success p-4 mb-2 w-100">Existing User</a><br>
            <a href="#cancel.php" class="btn btn-danger bg-transparent text-danger p-4 mb-2 w-100">Cancel Booking</a>
        </fieldset>
    </div>
  </div>
</div>
</body>
</html>
<?php }?>