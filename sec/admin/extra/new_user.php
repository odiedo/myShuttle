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
    <div class="col-md-4 mt-2">
        <form method="POST" action="index.new.php">
          <fieldset class="p-3 border-secondary text-light" style="border: 1px darkblue solid; width: 100%; box-shadow: 2px 4px 4px 0px darkblue;">
            <legend class="text-center" style="text-shadow: 0px 1px 1px darkblue;"><i class="fa fa-user-circle-o"></i> New User</legend>
            <label class="text-light text-left"><b>First Name:</b></label> 
            <input type="text" name="fname" autocomplete="off" style="border: 1px solid darkblue" class="form-control bg-transparent text-light mb-1" required>
            <label class="text-light text-left"><b>Last Name:</b></label> 
            <input type="text" name="lname" autocomplete="off" style="border: 1px solid darkblue" class="form-control bg-transparent text-light mb-1" required>
            <label class="text-light text-left"><b>Phone:</b></label> 
            <input type="tel" name="phone" autocomplete="off" style="border: 1px solid darkblue" class="form-control bg-transparent text-light mb-1" required>
            <input type='submit' class='btn btn-success text-success w-100 bg-transparent mb-1' value='continue Booking' name='new_user'>
            <input type='button' value='cancel' onclick="window.location='index.php';" class='btn btn-danger w-100 bg-transparent'>
          </fieldset>
        </form>
    </div>
  </div>
</div>
</body>
</html>
<?php }?>