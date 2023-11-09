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
    <?php 
    $admin = $_SESSION['id_number'];
    ?>
    <div class="container">
      <!-- Tab panes -->
            <div class="row pt-4">
              <div class="col-md-12 bg-transparent">
                <div class="text-light text-center h5">Vehicle Available at the station</div>
                <div class="card-body text-info">
                    <form action="../vehicle_avail.php" method="POST">
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <label>Driver ID Number: </label><br>
                                <input type="number" name="driver_id_no" placeholder="ID Number" class="form-control text-light" style="width: 100%; background-color: #000; font-family: cursive;" required>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <label>Number Plate: </label><br>
                                <input type="text" name="avail_vehicle_number_plate" placeholder="Vehicle Number Plate" class="form-control text-light" style="width: 100%; background-color: #000; font-family: cursive;" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <label>Office Location: </label><br>
                                <select name="avail_vehicle_place" class="form-control text-light" style="width: 100%; background-color: #000; font-family: cursive;" required>
                                    <option disabled selected> --- office location ---</option>
                                    <option value="Malaba">Malaba</option>
                                    <option value="Bungoma">Bungoma</option>
                                    <option value="Eldoret">Eldoret</option>
                                    <option value="Nakuru">Nakuru</option>
                                    <option value="Nairobi">Nairobi</option>
                                </select>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <label>Vehicle Destination: </label><br>
                                <select name="vehicle_Destination" class="form-control text-light" style="width: 100%; background-color: #000; font-family: cursive;" required>
                                    <option disabled selected> --- To ---</option>
                                    <option value="Malaba">Malaba</option>
                                    <option value="Bungoma">Bungoma</option>
                                    <option value="Eldoret">Eldoret</option>
                                    <option value="Nakuru">Nakuru</option>
                                    <option value="Nairobi">Nairobi</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <label>Departure Time: </label><br>
                                <input type="time" name="departure_time" min="5:00" max="22:00" required class="form-control text-info bg-light" style="width: 100%; background-color: #000; font-family: cursive;">
                                <input type="number" name="admin_id_no" value="<?php echo $admin; ?>" hidden>
                            </div>
                            <div class="col-sm-6 col-md-6"><br>
                                <input type="submit" name="save" class="btn btn-danger text-light" class="form-control" value="Save Route"><i class=""></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type = "text/javascript" >
function preventBack() { window.history.forward(); }
setTimeout("preventBack()", 0);
window.onunload = function () { null };
</script>     
</script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

<!-- Bootstrap JS Requirements -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php }?>