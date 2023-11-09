<?php
    include ('../../include/conn.php');
    ini_set('session.gc_maxlifetime', 1440); 
    session_start();
    if(empty($_SESSION['id_number'])){
        header("Location: ../../login/index.php");
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
<body style="background-color:#000;" oncontextmenu="return false;">
    <div class="container">
      <!-- Tab panes -->
        <div class="row">
          <div class="col-md-4"></div>
            <div class="col-md-4">
              <table class="table border-0" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-info"> 
                  <tr class="bg-dark"  style="font-size: 11px;">
                    <th class="">Plate No.</th>
                    <th class="">Destination</th>
                    <th class="">Departure</th>
                    <th class="">Booked Seats</th>
                    <th class="">Action</th>
                  </tr>
                </thead>
                <tfoot class="text-info bg-dark">
                  <tr  style="font-size: 11px;">
                    <th class="">Plate No.</th>
                    <th class="">Destination</th>
                    <th class="">Booked Seats</th>
                    <th class="">Departure</th>
                    <th class="">Action</th>
                  </tr>
                </tfoot>
                <?php   
                      include ('../../include/conn.php');
                      $office = 'Malaba';
                      $sql = "SELECT * FROM vehicle_avail where avail_vehicle_place='$office' AND status='station' ORDER BY date ";
                      $result = mysqli_query($conn, $sql);
                      if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                          while($row = mysqli_fetch_assoc($result)) {
                            $id = $row['avail_id'];
                            $plate = $row['avail_vehicle_number_plate'];
                            $destination = $row['vehicle_destination'];
                            $departure = $row['departure_time'];
                            $seats = $row['booked_seat'];
                            ?>
                            <tr class="text-light" style="font-size: 11px;">
                              <td class="pl-4 text-light"><b><span class="text-light"><?php echo $plate; ?></span></b></td>
                              <td class="pl-4 text-light"><b><?php echo $destination; ?></b></td>
                              <td class="pl-4 text-light"><b><?php echo $departure; ?></b></td>
                              <td class="pl-4 text-light"><b><?php echo $seats; ?></b></td>
                              <td class="pl-4 text-light">
                                <?php if ($seats < 16) {
                                  echo "Pending...";
                                } else {
                                echo "
                                <a name='exit' class='btn btn-warning' href='rel.php?id=$id&plate=$plate' style='font-size: 11px;'>exit
                                </a>";
                                }?>
                              </td>
                            </tr>
                            <?php
                          }
                        } else { ?>
                        <div class="row">
                          <div class="col-md-4">
                          
                          </div>
                        <div class="col-md-4">
                          <tr>
                            <td colspan="5" class="text-light text-center h6" style="font-family:cursive; font-style: italic;">
                              <i class="fa fa-ticket"></i> No vehicle entered at the moment!    
                            </td>
                          </tr>
                          
                        </div>
                        <div class="col-md-4">
                      </div>
                    </div>
                  <?php } 
                }     
                  mysqli_close($conn);?>               
                </table>
              </div>
              <div class="col-md-4"></div>
            </div>
          </div>

