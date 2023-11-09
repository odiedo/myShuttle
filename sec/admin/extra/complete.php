<?php
    include ('../../include/conn.php');
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
    <link href="../../../../hostels/hostel/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../../../hostels/hostel/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../../hostels/hostel/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- External CSS libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</header>     
<body style="background-color:#000;" oncontextmenu="return false;">
<?php
$plate_no = $_GET['plate_no'];
$price = $_GET['price'];
$seat_no = $_GET['seat_no'];
$ticket_id = $_GET['ticket_id'];
$phone = $_GET['phone'];
$start = $_GET['start'];
$end = $_GET['end'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$departure = $_GET['departure'];?>
<br><br>
<div class="container">
  <div class="row">
    <div class="col-md-4">
    
    </div>
    <div class="col-md-4 p-2">
	<fieldset style="border: 1px white solid; width: 100%; box-shadow: 2px 4px 4px 0px green;" class="p-4 text-light border-success text-center">
    <legend class="text-center text-light h5" style="text-shadow: 0px 1px 4px green;">Successful</legend>
    <center><span class="p-4 text-center" style="border: 2px solid green; font-size: 30px; border-radius: 50%;"><i class="fa fa-thumbs-up text-success text-center"></i></span></center><br>
    <span><i class="text-light text-center" style="font-family: serif;"> Thank you <b><?php echo $lname;?></b> <br> for reserving a seat with us.</i></span>
    <div class="card text-light bg-transparent border-drak">
      <div class="h6 bg-dark text-warning p-1" style="font-family: serif;">Kindly be at the station <b>30 Minutes</b> before departure.</div>
    </div>
    <button class="fa fa-home btn btn-success" onclick="window.location='index.php';"> Home</button>
  </div>
</div>




<script type = "text/javascript" >
function preventBack() { window.history.forward(); }
setTimeout("preventBack()", 0);
window.onunload = function () { null };
</script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

<!-- Bootstrap JS Requirements -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php } ?>
