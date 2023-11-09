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
    <style>
        .shuttle{
            height: 400px;
            width: 100%;
            border-radius: 21px;
            background-size: cover;
        }
.tile
{
  width:100%;
}
#tile-1 .tab-pane
{
  height:30px;
}
#tile-1 .nav-tabs
{
  background-color: red;
  border-radius:4px;
  position: relative;
  border: none!important;
}
#tile-1 .nav-tabs li
{
  margin:0px!important;
}
#tile-1 .nav-tabs li a
{
  position:relative;
  margin-right:3px!important;
  padding: 4px 3px!important;
  font-size:16px;
  border:none!important;
  color: white;
}
#tile-1 .nav-tabs a:hover
{
  background-color:!important;
  border:none;
}#tile-1 .nav-tabs li a
{
  position:relative;
  margin-right:3px!important;
  padding: 6px 3px!important;
  font-size:16px;
  border:none!important;
  color: #362411;
}
#tile-1 .nav-tabs a:hover
{
  background-color:!important;
  border:none;
}
    </style>
</header>    
<body style="background-color:#000;" oncontextmenu="return false;">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="card bg-transparent col-md-12" style="top: 30px;">
                <i class="fa fa-bus text-center text-info h1"></i>
                <div class="card-header text-light text-center h4">Vehicle Available</div>
                            <div class="col-md-12">
                                <table class="table border-0" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-warning text-center"> 
                                      <tr>
                                          <th>Vehicle</th>
                                          <th>Route</th>
                                          <th>Departure</th>
                                          <th>Status</th>
                                      </tr>
                                  </thead>
                            <?php   
                                include('../../include/conn.php');
                                $location = 'malaba';
                                $sql = "SELECT avail_vehicle_number_plate, avail_vehicle_place, booked_seat, vehicle_destination, departure_time  FROM vehicle_avail WHERE avail_vehicle_place='$location' AND status='station'";
                                $result = mysqli_query($conn, $sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                  // output data of each row
                                  while($row = mysqli_fetch_assoc($result)) {
                                    $plate_no = $row['avail_vehicle_number_plate'];
                                    $booked_seat = $row['booked_seat'];
                                    $office_location = $row['avail_vehicle_place'];
                                    $destination = $row['vehicle_destination'];
                                    $departure = $row['departure_time'];
                            ?>
                                    <tr class="text-light">
                                        <td class="pl-2 text-success"><b><?php echo "<a href='vehicle_pass.php?plate_no=$plate_no&start=$office_location&end=$destination' class='text-success'>"; ?><?php echo $plate_no; echo "</a>";?></b></td>
                                        <td class="text-center"><b><?php echo "<a href='vehicle_pass.php?plate_no=$plate_no&start=$office_location&end=$destination' class='text-light'>"; ?><?php echo $office_location; ?> >>>> <?php echo $destination; echo "</a>";?></b></td>
                                        <td class="pl-2"><b><?php echo "<a href='vehicle_pass.php?plate_no=$plate_no&start=$office_location&end=$destination' class='text-success'>"; ?><?php echo $departure; echo "</a>";?></b></td>
                                        <td class="text-center"><b><?php echo $booked_seat; ?>/16</b></td></a>
                                    </tr>
                                <?php                                   }
                                } else {
                                  echo "No vehicles available!";
                                }
                                
                                mysqli_close($conn);
                                ?>               </table>
                  
                                

                            </div>
  <!-- Nav tabs -->

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

<!-- Bootstrap JS Requirements -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
