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
</header>     
<body style="background-color:#000;" oncontextmenu="return false;">
<?php
$plate_no = $_GET['plate_no'];
$price = $_GET['price'];
$seat_no = $_GET['seat_no'];
$ticket_id = $_GET['ticket_id'];
$phone = $_GET['phone'];
$start = $_GET['start'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$end = $_GET['end'];
$departure = $_GET['departure'];?>
<div class="container mt-3">
  <div class="row">
  <div class="col-md-4">
  </div>
  	<div class="col-md-4">
        	<fieldset style="box-shadow: 0px 3px 3px 0px goldenrod;" class="p-4 text-light border-light text-center">
                <legend class="text-light text-info h5" style="text-shadow: 0px 1px 1px goldenrod;">Booking Summary</legend>
      <form method="POST" action=" ">                  
      <div class="card text-light bg-transparent border-drak">
      	<div class="card-body text-left text-success">
          From: <span class="text-light"><?php echo $start; ?></span> || To: <span class="text-light"><?php echo $end; ?></span><br>
          Seat Number: <span class="text-light"><?php echo $seat_no; ?></span><br>
          Plate Number: <span class="text-light"><?php echo $plate_no; ?></span><br>
          Departure: <span class="text-light"><?php echo $departure; ?></span><br>
          Phone: <span class="text-light"><?php echo $phone; ?></span><br>
        </div>
      </div>
      <div class="card pt-3 bg-transparent text-light">
        <div class="h6 bg-dark text-success p-1 text-center">Payment Method</div>
        <span class="text-success text-left pl-2" style="font-family: serif;"><i>Please select the payment method to complete your booking</i></span><br>
        <span class="text-light text-left pl-3"><input type="radio" name="pay_method" required value="cash"> <i class="fa fa-money robot">Cash</i> </span><br>
        <span class="text-light text-left pl-3"><input type="radio" name="pay_method" required value="mpesa"/> <i class="fa fa-telegram robot"> Mpesa</i></span><br>
        <div class="row">
        	<div class="col-12">
			 <button name="complete" class="btn text-success border-success w-100"><i class="fa fa-check"><br>
			complete</i></button>        
        	</div>
        </div>
        </form>
        <br>
        <div class="row">
            <div class="col-12">
                <form action=" " method="POST">
                    <input type="text" name="ticket_id" value="<?php echo $ticket_id; ?>" disabled hidden>
                    <input type="text" name="phone" value="<?php echo $phone; ?>" disabled hidden>
                    <button name="delete" class="text-danger btn border-danger w-100"><i class="fa fa-close"><br>cancel</i></button>
                </form>       
                <?php
                    if (isset($_POST['delete'])){
                        // sql to delete a record
                        $ticket_id = $_GET['ticket_id'];
                        $sql = "DELETE FROM vehicle_seats WHERE ticket_id='$ticket_id' ";

                        if ($conn->query($sql) === TRUE) {
                           header("Location: index.php?cancelled_successfuly");
                        } else {
                            echo "Error deleting record: " . $conn->error;
                        }

                        $conn->close();

                    }
                    ?>
            </div>
        </div>
      </div>
      </fieldset>
    </div>
  </div>
</div>

<?php
if (isset($_POST['complete'])){ 
    $pay_method = $_POST['pay_method'];
    $pri_key = $_GET['pri_key'];
    $booked_date = date('Y-m-d H:i:s');
    $referal = $_SESSION['phone'];
    $sql = "INSERT INTO booking (pri_key, fname, lname, phone, number_plate, ticket_id, seat_no, start, end, price, pay_method, referal, departure_time, booked_date) VALUES('$pri_key', '$fname', '$lname', '$phone', '$plate_no', '$ticket_id', '$seat_no', '$start', '$end', '$price', '$pay_method', '$referal', '$departure', '$booked_date')";
    if($conn->query($sql) === TRUE) {
        $ql = "UPDATE vehicle_avail SET booked_seat= booked_seat + 1 WHERE pri_key='$pri_key'";
            if ($conn->query($ql) === TRUE) {
              echo "<script>alert('Record updated successfully');</script>";
            } else {
              echo "<script>alert('Error updating record:');<script> " . $conn->error;
            }
        echo "<script>
            window.location='complete.php?pri_key=$pri_key&fname=$fname&lname=$lname&departure=$departure&start=$start&ticket_id=$ticket_id&end=$end&phone=$phone&price=$price&seat_no=$seat_no&plate_no=$plate_no';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }
}
?>
<script type = "text/javascript" >
function preventBack() { window.history.forward(); }
setTimeout("preventBack()", 0);
window.onunload = function () { null };
</script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

<!-- Bootstrap JS Requirements -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php } ?>
