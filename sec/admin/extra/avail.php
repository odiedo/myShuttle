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


    <!-- External CSS libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
        <!-- Custom Stylesheet -->
    </header>    
<body style="background-color:#000;" oncontextmenu="return false;">
<?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone1 = $_POST['phone'];
	?>
  <?php 
  $start = $_POST['start'];
  $end = $_POST['end'];
  $query = mysqli_query($conn, "SELECT start, end, price FROM routes WHERE start = '$start' AND end = '$end'");
	$result = mysqli_fetch_assoc($query);

	if (mysqli_affected_rows($conn) == 1){
			$price = $result['price'];
?>

<div class="container">
  <div class="row">
    <div class="col-md-4">
    
    </div>
    <div class="col-md-4 card bg-transparent">
      <div class="row">
          <div class="col-md-12">
             <center><span class="text-warning"><i class="fa fa-user-circle"></i> <?php echo $lname; ?></span></center>
          </div>
        </div>
      <div class="card-header text-light text-center h5">Vehicles Available</div>
      <span class="text-dark bg-warning text-center h6"><?php echo $start;?> - <?php echo $end;?> - Kshs. <?php echo $price; ?></span>      
      <div class="card-body text-light text-center">
      <?php $sql = "SELECT * FROM vehicle_avail WHERE avail_vehicle_place = '$start' AND vehicle_destination = '$end'";
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
            $query = "SELECT * FROM vehicle_seats WHERE number_plate = '$plate_no'";
            if ($resul=mysqli_query($conn,$query)){
              $rowcount=mysqli_num_rows($resul);
              $rowcount= ($rowcount - 1);
              if ($rowcount == 16  ){
                echo "Full";
              }else{
              ?>
              <span class="text-light"><?php echo $rowcount;?>/16</span>
              <?php }  ?>
          <!-- End available seats -->
          <?php echo"<a href='book.php?pri_key=$pri_key&plate_no=$plate_no&price=$price&phone=$phone1&fname=$fname&lname=$lname' class='bg-transparent w-100 btn text-success border-success' style='border-radius: 7px;'> Submit </a>"; ?>
        </p>
        <?php } } } else{
          echo "
          <div class='card-body text-light text-center'>
          <p style='border: 1px dotted yellow; padding-left:3px; padding-right: 3px; padding-bottom: 5px;' class='bg-transparent'>
            <span> </span><br>
            <b>No vehicle available for selected route</b><br>
            
            
          </p>";
        }?><input type='button' value='Back' onclick='window.history.back();' class='btn btn-danger'>
        <hr class="bg-danger">
      </div>
    </div>
  </div>
</div>
<?php
} else {
  echo "
  <script>  
  alert('That Route has not been upload yet, Kindly visit our station for manual booking. Thank you.');
  window.location='#customer.php';
  </script>";
} 
?>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

<!-- Bootstrap JS Requirements -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php }?>
