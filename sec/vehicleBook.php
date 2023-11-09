<?php
include('include/conn.php');
ini_set('session.gc_maxlifetime', 1440);
session_start();
if (empty($_SESSION['phone'])) {
    header("Location: ../index.php");
    exit();
} else {
    $plate_no = htmlspecialchars($_GET['plate_no'], ENT_QUOTES, 'UTF-8');
    $price = htmlspecialchars($_GET['price'], ENT_QUOTES, 'UTF-8');
    $pri_key = htmlspecialchars($_GET['pri_key'], ENT_QUOTES, 'UTF-8');
    $phone = $_SESSION['phone'];
    $sql = "SELECT * FROM vehicle_seats WHERE phone = '$phone' AND number_plate = '$plate_no' AND pri_key='$pri_key'";
    $answer = mysqli_query($conn, $sql);
    if (mysqli_num_rows($answer) > 0) {
?>
        <fieldset class="p-2 mb-2 mt-2 text-warning text-center" style="border: 1px orangered dotted; width: 100%; box-shadow: 2px 4px 4px 0px orangered;">
            <legend style="text-shadow: 0px 1px 1px orangered;">Alert</legend>
            <span style="font-family:cursive; font-size: 14px; color:antiquewhite;">Dear Customer, you have already booked a seat with <b><?php echo $plate_no; ?></b>. If you would like to book for another person, kindly <b>add</b> his/her details below</span>
        </fieldset>
        <form method="POST" action="check_pass_C.php">
            <fieldset class="p-3 border-warning text-light" style="border: 1px orange solid; width: 100%; box-shadow: 2px 4px 4px 0px orange;">
                <legend class="text-center text-warning"><i class="fa fa-plus"></i> Add New User Info</legend>
                <input type="text" name="pri_key" value="<?php echo $pri_key; ?>" hidden>
                <input type="text" name="plate_no" value="<?php echo $plate_no; ?>" hidden>
                <input type="number" name="price" value="<?php echo $price; ?>" hidden>
                <label class="text-light text-left"><b>First Name:</b></label>
                <input type="text" name="fname" autocomplete="off" class="form-control border-warning bg-transparent text-light border-top-0 border-left-0 border-right-0 mb-2" required>
                <label class="text-light text-left"><b>Last Name:</b></label>
                <input type="text" name="lname" autocomplete="off" class="form-control border-warning border-top-0 border-left-0 border-right-0 bg-transparent text-light mb-2" required>
                <label class="text-light text-left"><b>Phone:</b></label>
                <input type="tel" name="phone" autocomplete="off" class="form-control bg-transparent text-light border-warning border-top-0 border-left-0 border-right-0 mb-2" required>
                <button class='btn btn-warning text-light w-100 bg-transparent' name='new_user'>continue Booking</button>
            </fieldset>
        </form>
      </div>
    </div>

<?php
    } else {
        echo "<script>
            window.location='booking.php?pri_key=$pri_key&plate_no=$plate_no&phone=$phone&price=$price';
        </script>";
    }
}
?>


<?php
include('include/conn.php');
ini_set('session.gc_maxlifetime', 1440);
session_start();
if (empty($_SESSION['phone'])) {
    header("Location: ../index.php");
    exit();
} else {
    $plate_no = htmlspecialchars($_GET['plate_no'], ENT_QUOTES, 'UTF-8');
    $price = htmlspecialchars($_GET['price'], ENT_QUOTES, 'UTF-8');
    $pri_key = htmlspecialchars($_GET['pri_key'], ENT_QUOTES, 'UTF-8');
    $phone = $_SESSION['phone'];

    // Add your SQL query to retrieve data from the database
    $sql = "SELECT * FROM vehicle_seats WHERE phone = '$phone' AND number_plate = '$plate_no' AND pri_key='$pri_key'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        echo "hurray";

    } else {
    $content = "Plate Number: $plate_no<br>Price: $price<br>Pri Key: $pri_key<br>Phone: $phone";

    // Return the content directly
    echo $content;
    }
}

?>
