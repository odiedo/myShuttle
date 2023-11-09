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
    <!-- External CSS libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="include/style.css">


     <!-- to be deleted -->
     <link href="../../hostels/hostel/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../hostels/hostel/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../hostels/hostel/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </header>    
<body style="background-color:#000;" oncontextmenu="return false;" onload="myFunction()" style="margin:0;">
<center><div id="loader" class="p-2" style="margin-top: 230px;"></div></center>
<div class="container animate-bottom" style="display:none;" id="myDiv">
<?php
	require ('include/conn.php');
	$start = $_POST['start'];
	$end = $_POST['end'];
	$query = mysqli_query($conn, "SELECT start, end, price FROM routes WHERE start = '$start' AND end = '$end'");
	$result = mysqli_fetch_assoc($query);

	if (mysqli_affected_rows($conn) == 1){
			$price = $result['price'];
?>
  <div class="row">
    <div class="col-md-4">
    
    </div>
    <div class="col-md-4 card bg-transparent">
      <div class="card-header text-light text-center h5">Vehicles Available</div>
      <span class="text-dark bg-warning text-center h6"><?php echo $start;?> - <?php echo $end;?> - Kshs. <?php echo $price; ?></span>      
      <div class="card-body text-light text-center">
      <?php $sql = "SELECT * FROM vehicle_avail WHERE avail_vehicle_place = '$start' AND vehicle_destination = '$end' AND status='station' ";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              $plate_no = $row['avail_vehicle_number_plate'];
              $avail_seat = $row['booked_seat'];
              $pri_key = $row['pri_key'];
              $departure = $row['departure_time']; ?>
        
        <p style="border: 1px dotted yellow; border-bottom: 1px solid white; padding-left:3px; padding-right: 3px; padding-bottom: 5px;" class="bg-transparent">
          <span class="h6 text-warning"><?php echo $plate_no; ?></span><br>
          Departure: <b><?php echo $departure; ?></b><br>
          Booked Seat(s):  <i class="fa fa-chair text-light"></i>
          <!-- Available seats -->
          <?php 
            $query = "SELECT * FROM booking WHERE number_plate = '$plate_no' AND pri_key='$pri_key'";
            if ($resul=mysqli_query($conn,$query)){
              $rowcount=mysqli_num_rows($resul);
              $rowcount= ($rowcount);
              if ($rowcount == 16  ){
                echo "Full";
              }else{
              ?>
              <span class="text-light"><?php echo $rowcount;?>/16</span>
              <!-- End available seats -->
            <?php echo"<a href='check_pass.php?pri_key=$pri_key&plate_no=$plate_no&price=$price' class='bg-transparent w-100 btn text-success border-success' style='border-radius: 7px;'> Submit </a>"; ?>
              <?php } ?>
        </p>
        <?php } } } else{
          echo "
          <div class='card-body text-light text-center'>
          <p style='border: 1px dotted yellow; padding-left:3px; padding-right: 3px; padding-bottom: 5px;' class='bg-transparent'>
            <span> </span><br>
            <b>No vehicle available for selected route</b><br>
          </p>";
        }?>
        <hr class="bg-danger">
        <button class="btn btn-danger bg-transparent" onclick="window.history.back();">Back</button>
      </div>
    </div>
  </div>
  <?php include('btm_nav.php');?>
</div>
<?php
} else {
  echo "
  <script>  
  alert('That Route has not been upload yet, Kindly visit our station for manual booking. Thank you.');
  window.location='index.php';
  </script>";
} 
?>
<script type="text/javascript" src="include/load.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

<!-- Bootstrap JS Requirements -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php }?>
