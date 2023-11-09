<?php
    include ('include/conn.php');
    ini_set('session.gc_maxlifetime', 1440); 
    session_start();
    if(empty($_SESSION['phone'])){
        header("Location: ../index.php");
        exit();
    }else{
?>
<!DOCTYPE html>
<header>
    <title>Eldoret Shuttle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- to be deleted -->
    <link href="../../hostels/hostel/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../hostels/hostel/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../hostels/hostel/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- External CSS libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Custom Stylesheet -->   
    <link rel="stylesheet" type="text/css" href="include/style.css">
  </header>     
<body style="background-color:#000;" oncontextmenu="return false;" onload="myFunction()" style="margin:0;">
<center><div id="loader" class="p-2" style="margin-top: 230px;"></div></center>
<div class="container animate-bottom" style="display:none;" id="myDiv">
<?php
$plate_no = $_GET['plate_no'];
$price = $_GET['price'];
$pri_key = $_GET['pri_key'];
$phone = $_SESSION['phone'];
$sql = "SELECT * FROM vehicle_seats WHERE phone = '$phone' AND number_plate = '$plate_no' AND pri_key='$pri_key'"; 
$answer = mysqli_query($conn, $sql);
if (mysqli_num_rows($answer) > 0) {?>
  <div class="row">
    <div class="col-md-4">
      
    </div>
    <div class="col-md-4">
      <div class="row">
          <div class="col-md-12 breadcrumb pl-4 h5 bg-transparent text-warning" style="border: 1px #0e24 solid; width: 100%; box-shadow: 2px 2px 2px 0px orange;">
            <center><i class="fa fa-bullhorn">Alert [Double Booking] </i></center>
          </div>  
      </div>
      <div class="card bg-transparent">
        <fieldset class="p-2 mb-2 mt-2 text-warning text-center" style="border: 1px orangered dotted; width: 100%; box-shadow: 2px 4px 4px 0px orangered;">
          <legend style="text-shadow: 0px 1px 1px orangered;">Alert</legend>
          <span style="font-family:cursive; font-size: 14px; color:antiquewhite;">Dear Customer, you have already booked a seat with <b><?php echo $plate_no; ?></b>. If you would like to book for another person, kindly <b>add</b> his/her details below</span>
        </fieldset>
        <form method="POST" action="check_pass_C.php">
        <fieldset class="p-3 border-warning text-light" style="border: 1px orange solid; width: 100%; box-shadow: 2px 4px 4px 0px orange;">
          <legend class="text-center text-warning"><i class="fa fa-plus"></i> Add New User Info</legend>
          <input type="text" name="pri_key" value="<?php echo $pri_key; ?>" hidden>
          <input type="text" name="plate_no" value="<?php echo $plate_no; ?>" hidden>
          <input type="number" name="price" value="<?php echo $price; ?>" hidden>
          <label class="text-light text-left"><b>First Name:</b></label> 
          <input type="text" name="fname" autocomplete="off" class="form-control border-warning bg-transparent text-light border-top-0 border-left-0 border-right-0 mb-2" required>
          <label class="text-light text-left"><b>Last Name:</b></label> 
          <input type="text" name="lname" autocomplete="off" class="form-control border-warning border-top-0 border-left-0 border-right-0 bg-transparent text-light mb-2" required>
          <label class="text-light text-left"><b>Phone:</b></label> 
          <input type="tel" name="phone" autocomplete="off" class="form-control bg-transparent text-light border-warning border-top-0 border-left-0 border-right-0 mb-2" required>
          <button class='btn btn-warning text-light w-100 bg-transparent' name='new_user'>continue Booking</button> 
          </form>
        </fieldset>
      </div>
    </div>
    <div class="col-md-4">
      
    </div>
  </div>
  <br><br>
<?php include('btm_nav.php'); ?>
<script type="text/javascript" src="include/load.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

<!-- Bootstrap JS Requirements -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php } else {
  echo "<script>
            window.location='booking.php?pri_key=$pri_key&plate_no=$plate_no&phone=$phone&price=$price';
        </script>";
}
}?>