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
    <link rel="stylesheet" type="text/css" href="include/style.css">
</header>     
<body style="background-color:#000;" oncontextmenu="return false;" onload="myFunction()" style="margin:0;">
<center><div id="loader" class="p-2" style="margin-top: 230px;"></div></center>
<div class="container animate-bottom" style="display:none;" id="myDiv">
  <div class="row">
  	<div class="col-md-4">
  	
  	</div>
  	<div class="col-md-4 p-1">
      <h5 class="breadcrumb pl-4 h5 bg-transparent border-0 text-warning" style="border: 1px #0e24 solid; width: 100%; box-shadow: 0px 3px 3px 0px goldenrod;">
        <center>Booking History <i class="fa fa-ticket"></i></center>
      </h5>  
		      <div class="card text-light bg-transparent">
		      	<div class="card-body text-left text-dark">
	         	<?php
              $phone = $_SESSION['phone'];
              $sql = "SELECT * FROM booking WHERE  phone = '$phone'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                  $fname = $row['fname'];
                  $lname = $row['lname'];
                  $start = $row['start'];
                  $end = $row['end'];
                  $plate_no = $row['number_plate'];
                  $ticket_id = $row['ticket_id'];
                  $departure = $row['departure_time'];
                  $booked_date = $row['booked_date']; ?>
              	<div class="card  bg-transparent text-uppercase mb-2 border-0 " style="border: 1px #024 solid; box-shadow: 0px 3px 3px 0px goldenrod;">
              		<div class="card-body text-warning" style="font-family: serif; font-size: 12px;">
              			Trip: <span class="text-light float-right"><?php echo $start; ?> --To--<?php echo $end; ?> </span><br>
              			Date: <span class="text-light float-right"><?php echo $booked_date; ?> </span><br>
              			Vehicle: <span class="float-right text-light"><?php echo $plate_no; ?></span><br>
              			Departure Time: <span class="text-light float-right"><?php echo $departure; ?></span><br>
              			Ticket Number: <span class="text-light float-right"><?php echo $ticket_id; ?></span><br>
              		</div>
              	</div>


              <?php } } else {
                echo "<p class='text-light text-center' style='font-size:16px; font-family: cursive;'><i class='fa fa-recycle text-danger' style='font-size: 60px;'></i><br> >You have not reserved any seat with us! <a href='index.php'>Click Here!</a>  to book a seat.</p>";
              } ?>
              <p class="m">
                <span class="text-light" style="font-family: serif; font-size: 12px;"><i>if you want to cancel any of your booking, kindly click the button below.</i></span><br> <button class="btn text-danger float-right border-danger fa fa-trash"> Cancel booking</button></p>			  
            </div>
          </div>
          <hr class="bg-light">
          <div class="card  bg-transparent mb-2 mt-2 " style="box-shadow: 0px 3px 3px 0px goldenrod;">
            <div class="card-body text-light text-center">
              <span class="text-light text-center text-uppercase">Parcel(s)</span><br>
              <i class="fa fa-gift text-warning " style="font-size:48px"></i><br>
              <span class="text-light" style="font-family: serif; font-size: 12px;"><i>You have no parcel at the moment.</i></span><br>
            </div>
          </div>
        </div>
      </div>
      <?php include('btm_nav.php');?>
    </div>
<script type="text/javascript" src="include/load.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

<!-- Bootstrap JS Requirements -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php } ?>
