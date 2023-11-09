<?php
    include ('../../include/conn.php');
    ini_set('session.gc_maxlifetime', 1440); 
    session_start();
    if(empty($_SESSION['phone'])){
        header("Location: ../index.php");
        exit();
    } else {
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
   
        <!-- Custom Stylesheet -->
        <style>
          /* HIDE RADIO */
[type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + img {
  outline: 3px solid green;
}
        </style>
    </header>     
<body style="background-color:#000;" oncontextmenu="return false;">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <center><h4 class="text-warning float-left">Daily Trips </h4><button class="btn bg-transparent float-right text-success border-success" onclick="print();"><i class="fa fa-print"></i></button> </center>
        <table class="table table-transparent border-0" id="dataTable" width="100%" cellspacing="0">
          <thead class="text-info"> 
            <tr class="bg-dark text-warning text-center text-uppercase" style="font-size: 11px; font-weight: bold;">
              <th class=""><span>S/N</span></th>
              <th class=""><span>Plate</span></th>
              <th class=""><span>Driver</span></th>
              <th class=""><span>From</span></th>
              <th class=""><span>To</span></th>
              <th class=""><span>Date</span></th>
              <th class=""><span>View</span></th>
            </tr>
          </thead>
          <tfoot class="text-warning text-center bg-dark">
            <tr class="bg-dark text-uppercase" style="font-size: 11px; font-weight: bold;">
              <th class=""><span>S/N</span></th>
              <th class=""><span>Plate</span></th>
              <th class=""><span>Driver</span></th>
              <th class=""><span>From</span></th>
              <th class=""><span>To</span></th>
              <th class=""><span>Date</span></th>
              <th class=""><span> View </span></th>
            </tr>
          </tfoot>
          <?php   
            $sql = "SELECT * FROM trips, driver WHERE trips.driver_id_no=driver.id_number ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                $driver_id = $row['driver_id'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $plate = $row['plate'];
                $seats = $row['seats'];
                $start = $row['start'];
                $driver_id_no = $row['driver_id_no'];
                $pri_key = $row['pri_key'];
                $end = $row['end'];
                $date = $row['date'];?>
             <tr class="" style="font-size: 11px;">
                <td class="pl-1  text-center"><b><?php echo "<a style='text-decoration: none; color: green' href='report.php?driver_id_no=$driver_id_no&pri_key=$pri_key'>"; ?><?php echo $pri_key; ?></a></td>
                <td class="pl-1 text-light text-center"><b><?php echo $plate; ?></td>
                <td class="pl-1 text-light text-center"><b><span class="text-light"><?php echo $lname; ?> <?php echo $fname; ?></span></b></td>
                <td class="pl-1 text-light text-center"><b><?php echo $start; ?></td>
                <td class="pl-1 text-center text-light"><b><?php echo $end; ?></td>
                <td class="pl-1 text-light text-center"><b><?php echo $date; ?></b></td>
                <td class="pl-1 text-light text-center"><b><?php echo "<a class='btn btn-warning bg-transparent text-warning' href='report.php?driver_id_no=$driver_id_no&pri_key=$pri_key'>"; ?> <i class="fa fa-eye"></i> View</a></b></td>
              </tr>
              <?php }
                } else { ?>
              <p class="text-light text-center h3" style="font-family:cursive; font-style: italic;"><i class="fa fa-ticket"></i> No vehicle is registered at the moment!</p>
            <?php }
            mysqli_close($conn);
            ?>               
          </table>
    </div>
  </div>
</div>


<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

<!-- Bootstrap JS Requirements -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php }
?>
