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
    <title>myShuttle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- to be deleted -->
    <link href="../../../hostels/hostel/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="../style.css">
    <!-- Jquery -->
    <script type="text/javascript" src="include/jquery-1.10.2.min.js" ></script>
</header>    
<body style="background-image: url('assets/img/banner-3.jpg');background-size: cover;" oncontextmenu="return false;" onload="loader()" style="margin:0;">
<?php 
$phone = $_SESSION['phone'];
$sql = "SELECT * FROM passengers WHERE phone = '$phone'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $lname = $row['lname'];
?>
<div id="main">
  <section id="booking">
    <div class="container">
      <div class="booking-header">
        <h2><i class="fa fa-bus"></i><br>myShuttle</h2>
        <h6><i class="fa fa-user-circle-o"></i> <?php echo $lname; ?></h6>
      </div>
      <div class="marq">
        <i class="fa fa-bullhorn" aria-hidden="true"></i>
        <marquee behavior="" direction="left">Travel Fast, Travel Safe with myShuttle.</marquee>
      </div>
      <div class="booking-body">
        <div class="booking-menu">
          <ul>
            <li onclick="book_search();" id="bookNow" style="background: red;"><i class="fa fa-ticket" aria-hidden="true"></i> Booking</li>
            <li onclick="routes();" id="route-sel"><i class="fa fa-map" aria-hidden="true"></i> Routes</li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> Contact</li>
            <li><i class="fa fa-bell" aria-hidden="true"></i> Messages</li>
          </ul>
        </div>
        <div class="book" id="book">
          <!-- Search Results start -->
          <div id="bookBox">
            

          </div>
          <div id="vehicleBookNowShow" style="font-size: 100px; color:red;">

          </div>
          <!-- Search Results end -->
          <!-- Vehicle Search start -->
          <form id="searchVehicle" method="POST">
            <p><span>Book(Reserve) Your Seat Now!</span></p>
            <div class="book-sec">
              <label for="from">From: </label>
              <select name="start" required>
                <option selected disabled> --- Select From ---</option>
                <option value="Malaba">Malaba</option>
                <option value="Bungoma">Bungoma</option>
                <option value="Eldoret">Eldoret</option>
                <option value="Nakuru">Nakuru</option>
                <option value="Nairobi">Nairobi</option>
              </select>
            </div>
            <div class="book-sec">
              <label for="to">To: </label>
              <select name="end" required>
                <option value="" disabled selected> --- Select Destination --- </option>
                <option value="Malaba">Malaba</option>
                <option value="Bungoma">Bungoma</option>
                <option value="Eldoret">Eldoret</option>
                <option value="Nakuru">Nakuru</option>
                <option value="Nairobi">Nairobi</option>
              </select>
            </div>
            <div class="sub1">
              <button type="submit" name="search" onclick="searchVeh();"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
            </div>
          </form>
          <!-- Vehicle search end -->
          <div class="bookBox1" id="bookNow1">

          </div>
        </div>
        <div class="route-available" id="route-select" style="display:none;">
          <p>
            <span>Route(s) Available</span>
          </p>
          <table>
            <thead>
              <tr>
                <td>#</td>
                <td>From</td>
                <td></td>
                <td>To</td>
                <td>Price</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Malaba</td>
                <td><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> </td>
                <td>Eldoret</td>
                <td>800</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Malaba</td>
                <td><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> </td>
                <td>Eldoret</td>
                <td>800</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Malaba</td>
                <td><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> </td>
                <td>Eldoret</td>
                <td>800</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Malaba</td>
                <td><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> </td>
                <td>Eldoret</td>
                <td>800</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Malaba</td>
                <td><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> </td>
                <td>Eldoret</td>
                <td>800</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Malaba</td>
                <td><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> </td>
                <td>Eldoret</td>
                <td>800</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

</div>
<?php 
    } 
  } else{
    echo "<script> alert('There was an error. Plese login again later')
          window.location='../index.php';
          </script>";
        }
?>


<!-- <div class="container animate-bottom" style="display:none;" id="myDiv">
  <div class="row">
      <div class="col-md-4">
    
    </div>
    <div class="card bg-transparent col-md-4">
      <div class="row">
        <div class="col-md-12">
          <?php 
            $phone = $_SESSION['phone'];
            $sql = "SELECT * FROM passengers WHERE phone = '$phone'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
            // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                $lname = $row['lname'];
                ?>
                <center><span class="text-warning"><i class="fa fa-user-circle"></i> <?php echo $lname; ?></span></center>
        </div>
      </div>
      <img src="assets/img/TimeBlue.png" alt="" style="width: 100%; height: 100px;">
      <div class="card-header text-light text-center h4">Eldoret Shuttle Online Booking</div>
        <div class="card-body text-success">
          <form action="avail.php" method="POST">
            <label>From: </label><br>
            <select name="start" class="form-control text-light" style="width: 100%; background-color: #000; font-family: cursive;" required>
              <option disabled selected value=""> --- From ---</option>
              <option value="Malaba">Malaba</option>
              <option value="Bungoma">Bungoma</option>
              <option value="Eldoret">Eldoret</option>
              <option value="Nakuru">Nakuru</option>
              <option value="Nairobi">Nairobi</option>
            </select><br>
            <label>To: </label><br>
            <select name="end" class="form-control text-light" style="width: 100%; background-color: #000; font-family: cursive;" required>
              <option value="" disabled selected>--- Destination ---</option>
              <option value="Malaba">Malaba</option>
              <option value="Bungoma">Bungoma</option>
              <option value="Eldoret">Eldoret</option>
              <option value="Nakuru">Nakuru</option>
              <option value="Nairobi">Nairobi</option>
            </select><br>
            <button name="search" class="btn btn-warning bg-transparent form-control w-100 text-warning" style="width: 100%;font-family: cursive;"> Submit Searches </button>
          </form>
        </div>
        <?php } } else{
          echo "<script> alert('There was an error. Plese login again later')
          window.location='../index.php';
          </script>";
        }?>
        </div>
      </div>
      <?php include('btm_nav.php');?>
    </div>
</div> -->
<script type="text/javascript">
$(document).ready(function() {
    $('#searchVehicle').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'bookSearch.php',
            data: $(this).serialize(),
            success: function(data){
              document.getElementById("bookBox").innerHTML = data;
            },
            error: function(){
              alert('Please Try Again later! we are having a system maintenance at the moment!');
            }
       });
     });
});
</script>
<script src="../js.js"></script>
</body>
</html>
<?php }?>