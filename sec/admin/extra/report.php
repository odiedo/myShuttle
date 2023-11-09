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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </header>     
<body style="background-color:#000;" oncontextmenu="return false;">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card text-light" style="font-weight: bold;">
        <div class="card-header"><p class="float-left text-success"><i class="fa fa-arrow-left btn bg-transparent text-success pr-4" onclick="window.history.back();"></i>  Eldoret Shuttle Vehicle Report</p> <p class="float-right text-center"><button onclick="print();" class="btn bg-transparent text-success"><i class="fa fa-print"><br>Print</i></button></p></div>
        <?php 
          $pri_key = $_GET['pri_key'];  
          $driver_id_no = $_GET['driver_id_no'];  
          $sql = "SELECT * FROM driver, trips WHERE trips.pri_key='$pri_key' AND driver.id_number='$driver_id_no' LIMIT 1";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $driver_id = $row['driver_id'];
              $plate = $row['plate'];
              $start = $row['start'];
              $end = $row['end'];
              $phone = $row['phone'];
              $fname = $row['fname'];
              $email = $row['email'];
              $date = $row['date'];
              $seats = $row['seats'];
              $lname = $row['lname']; ?>
              <div class="card-body" style="font-family: cursive;">
                <p class="text-right text-success" style="padding-right: 100px;">
                  <span><?php echo $lname; ?> <?php echo $fname; ?>,</span><br>
                  <span>0<?php echo $phone; ?>, </span><br>
                  <span><a href="mailto:#<?php echo $email; ?>" class="text-success" > <?php echo $email; ?></a>, </span><br>                  
                  <span><u><?php echo $date; ?></u>, </span><br>
                </p>
                <p class="text-left text-success" style="padding-left: 100px;">
                  <span>Drirector,</span><br>
                  <span>Eldoret Shuttle -Malaba station, </span><br>
                  <span><a href="mailto:#odiedopaul@gmail.com" class="text-success">directormalaba@eldoret.com</a></span><br>
                </p>
                <p class="text-left text-success" style="padding-left: 100px">
                  <span>Dear Sir/Madam,</span><br>
                </p>
                <p class="pl-4">
                  <center><span class="text-warning text-uppercase"><u>REF: General Report of "<?php echo $plate; ?>" from <?php echo $start; ?> TO <?php echo $end; ?></u></span><br></center>  
                  <p class="text-dark" style="font-family: cursive; padding-left: 100px; padding-right: 100px; font-weight:none;">Following the loading of vehicle <?php echo $plate; ?> on account of <?php echo $fname; ?> <?php echo $lname; ?>, vehcle departed from <?php echo $start; ?> to <?php echo $end; ?> on <?php echo $date; ?> carrying <?php echo $seats; ?> passengers.</p>
                </p>
                <center><table class="table table-striped table-hover table-bordered table-light" style="width: 80%; font-size: 12px;">
                  <thead class="text-light text-uppercase" style="background-color: grey;">
                    <tr>
                      <th>Full Name</th>
                      <th>phone</th>
                      <th>Seat</th>
                      <th>Price</th>
                      <th>Ticket No</th>
                    </tr>
                  </thead>
                  <?php 
                    $query = "SELECT * FROM booking, trips WHERE trips.pri_key='$pri_key' AND booking.pri_key='$pri_key' ORDER BY seat_no ASC";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                      while($row = mysqli_fetch_assoc($result)) {?>
                      <tr class="text-uppercase">
                        <td><?php echo  $row['lname'];   ?> <?php echo  $row['fname'];   ?></td>
                        <td>0<?php echo $row['phone'];  ?></td>
                        <td><?php echo $row['seat_no'];  ?></td>
                        <td><?php echo $row['price'];  ?></td>
                        <td><?php echo $row['ticket_id'];  ?></td>
                      </tr>
                    <?php } 
                  } else { ?>
                          <p class="text-light text-center h3" style="font-family:cursive; font-style: italic;"><i class="fa fa-ticket"></i> No vehicle is registered at the moment!</p>
                  <?php }  ?>   
                </table></center>
              </div>
           
            <?php }
          } else { ?>
                  <p class="text-light text-center h3" style="font-family:cursive; font-style: italic;"><i class="fa fa-ticket"></i> No vehicle is registered at the moment!</p>
          <?php } 
          mysqli_close($conn); ?>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php }
?>
