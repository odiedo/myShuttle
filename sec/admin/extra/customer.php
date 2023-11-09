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

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
        <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="style.css">
    <link type="text/css" rel="stylesheet" href="include/style.css">
    <script type="text/javascript" src="include/js/jquery-1.10.2.min.js" ></script>
  </header>
    <body style="background-color: #000;" oncontextmenu="return false;">
    <!-- Content Row -->
    <div class="container">
      <div class="row">
        <div class="card bg-transparent col-md-4">
          <div class="row">
            <div class="col-md-12">
            <?php 
            $fname = $_GET['fname'];
            $lname = $_GET['lname'];
            $phone1 = $_GET['phone'];
            ?>
            <center><span class="text-warning"><i class="fa fa-user-circle"></i> <?php echo $lname; ?></span></center>
          </div>
        </div>
        <div class="card-header text-light text-center h4">Eldoret Shuttle Online Booking</div>
          <div class="card-body text-info">
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
              <input type="text" name="fname" value="<?php echo $fname; ?>" hidden>
              <input type="text" name="lname" value="<?php echo $lname; ?>" hidden>
              <input type="tel" name="phone" value="<?php echo $phone1; ?>" hidden>
            </select><br> <br>
            <input type="submit" name="search" class="btn bg-transparent text-success btn-success fa-search" class="form-control" style="width: 100%;font-family: cursive;" value="Submit Searches"><i class=""></i>
          </form>

        </div><input type='button' value='cancel' onclick="window.location='index.php';" class='btn btn-danger bg-transparent'>
      </div>
    </div>
  </div>
</body>
</html>
<?php }?>