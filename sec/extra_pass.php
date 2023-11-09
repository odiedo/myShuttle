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
  outline: 3px solid purple;
}
        </style>
    </header>     
<body style="background-color:#000;" oncontextmenu="return false;">
<?php
$plate_no = $_GET['plate_no'];
$price = $_GET['price'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$price = $_GET['price'];
$pri_key = $_GET['pri_key'];
$sql = "SELECT * FROM vehicle_avail WHERE  avail_vehicle_number_plate= '$plate_no' AND pri_key='$pri_key'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $plate = $row['avail_vehicle_number_plate'];
    $avail_seat = $row['booked_seat'];
    $start = $row['avail_vehicle_place'];
    $end = $row['vehicle_destination'];
    $departure = $row['departure_time'];
?>
<div class="container">
  <div class="row">
    <div class="col-md-4">
    
    </div>
    <div class="card-body col-md-4 text-dark text-left">
      <center><span class="text-warning text-center h5">Complete you booking</span></center><br>
      <span class="text-success"><b>Route: </b> </span><span class="text-light"><?php echo $start; ?> <span class="fa fa-bus"></span> <?php echo $end; ?> "<?php echo $plate; ?></span>"<br>
      <hr class="bg-light">
      <table class="text-warning mb-4" style="font-size: 12px; width: 100%" cellpadding="1">
        <tr>
          <td colspan="2">
            <img src="1.png" height="15px" width="15px" alt="Available seat">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Available seats
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <img src="3.png" height="15px" width="15px" alt="Booked seats">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Booked Seats
          </td>
        </tr>
      </table>
      <center>
      <?php
        $k = array();
        $sql = "SELECT * FROM booking WHERE  number_plate= '$plate_no' AND pri_key='$pri_key' ";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              $k[] = $row['seat_no'];
              
            }
            $ais = array("A","B","C","D","E");
            $aisle = array("A3","A4","C2","D2");
            
            
            echo "<form method='POST' action=''> 
            <table class='text-light' cellpadding='8' style='font-size:9px;width:75%; background-color: #012'>";
            foreach($ais as $i){
              echo "<tr>";
              for($r=1;$r<=4;$r++){
                $seatno = $i.$r;
                if(in_array($seatno,$k)){
                  $seat = '<input type="radio" disabled="disabled" value="'.$seatno.'" class=" box'.$plate_no.'" name="seat[]"> <img height="30px" width="30px" src="3.png"> <br> seat '.$seatno.'';
                }elseif(!in_array($seatno,$aisle)){
                  $seat = '<input type="radio" required value="'.$seatno.'" name="seat" style="width:28px; height:28px; outline : 1px solid #009900;" class="box'.$plate_no.'" id="'.$price.'" onclick="getvalue'.$plate_no.'();test'.$plate_no.'(this);" >  <img height="30px" width="30px" src="1.png" alt="Option 2"><br> seat '.$seatno.'';
                }else{
                  $seat = "&nbsp;";
                }
                echo "<td>$seat</td>";
              }
              echo "</tr>";
            }?>

            </table><br>
            <table class="text-light" style="font-family: serif; background-color: #0; width: 100%" cellpadding="1">
              <tr style="font-size: 12px;">
                <td>
                  Boarding Point: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                </td>
                <td>
                  <?php echo $start; ?>
                </td>
              </tr>
              <tr style="font-size: 12px;">
                <td>Amount: </td>
                <td> KSH. <?php echo $price; ?></td>
              </tr>
          </table><br>
            <input type='submit' class='btn btn-warning text-warning w-100 bg-transparent' value='Submit Booking' name='submit'>
            </form>
            
            </center>
    </div>
  </div>
</div>
</ul>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

<!-- Bootstrap JS Requirements -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php } }?>

<?php
if (isset($_POST['submit'])){ 
    // prepare and bind
    // set parameters and execute
    $seat_no = $_POST['seat'];
    $ticket_id = uniqid();
    $phone = $_GET['phone'];
    $date = date('Y-m-d H:i:s');
    $plate_no = $_GET['plate_no'];
    $pri_key = $_GET['pri_key'];
    $sql = "INSERT INTO vehicle_seats (pri_key, number_plate, ticket_id, seat_no, phone, date) VALUES('$pri_key', '$plate_no', '$ticket_id', '$seat_no', '$phone', '$date')";
    if($conn->query($sql) === TRUE) {
        echo "<script>
        window.location='confirm_extra.php?pri_key=$pri_key&lname=$lname&fname=$fname&date=$date&departure=$departure&start=$start&ticket_id=$ticket_id&end=$end&phone=$phone&price=$price&seat_no=$seat_no&plate_no=$plate_no';
        </script>";
    } else {
        echo "<script>alerrt('Error: ');</script>" . $sql . "<br>" . $conn->error;  
    }
}
}}
?>
