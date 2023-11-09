
<div id="vehicleBookNow">
  <div class="search-header">
    <span>Search Results...</span>
    <i class="fa fa-times" aria-hidden="true" onclick="closeSearch()"></i>
  </div>
  
  <?php
  include ("include/conn.php");
  if (isset($_POST['start']) && $_POST['start'] && isset($_POST['end']) && $_POST['end']) {
    $end = $_POST['end'];
    $start = $_POST['start'];

    if ($end == $start) {
      echo "Please select valid route";
    } else {
      $query = mysqli_query($conn, "SELECT start, end, price FROM routes WHERE start = '$start' AND end = '$end'");
      $result = mysqli_fetch_assoc($query);
    
      if (mysqli_affected_rows($conn) == 1){
        $price = $result['price'];
        $sql = "SELECT * FROM vehicle_avail WHERE avail_vehicle_place = '$start' AND vehicle_destination = '$end' AND status='station' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            $plate_no = $row['avail_vehicle_number_plate'];
            $avail_seat = $row['booked_seat'];
            $pri_key = $row['pri_key'];
            $departure = $row['departure_time'];
            echo "<div class='route'> <span>" . $start . "</span> >> <span>" . $end . "</span> @ Kshs. " . $price . " </div>";
            echo "<div class='vehicleRes'>
                    <span>Vehicle:</span> <span>" .$plate_no. "</span>
                  </div>
                  <div class='vehicleRes'>
                    <span>Booked Seat(s):</span> <span>" .$avail_seat. "/16</span>
                  </div>
                  <div class='vehicleRes'>
                    <span>Departure: </span> <span>" .$departure. "</span>
                  </div>
                  
                  <div class='sub1'>
                  <form id='myForm'>
                    <button type='submit' onclick='vehicleBookNow1'>Book Now</button>
                  </div></form>";
          }
        } else {
          echo "<table id='bookSrchRes'>";
          echo "<tr class='t-header'>";
          echo "<td colspan='5'>";
          echo "No available vehicle for that route at the Moment";
          echo "<td>";
          echo "</tr>";
          echo "</table>";
        }
      } else {
        echo "<table id='bookSrchRes'>";
        echo "<tr class='t-header'>";
        echo "<td colspan='5'>";
        echo "No available vehicle for that route at the Moment";
        echo "<td>";
        echo "</tr>";
        echo "</table>";
      }
    }
  }
  ?>
</div>
<div id="vehBook">

</div>
<script type="text/javascript">
function vehicleBookNow1() {
    // Capture form data or parameters you want to send to vehicleBook.php
    var plate_no = '$plate_no'; // Replace with actual plate_no
    var price = '$price'; // Replace with actual price
    var pri_key = '$pri_key'; // Replace with actual pri_key

    // Make an AJAX request to vehicleBook.php
    $.ajax({
        type: 'GET',
        url: 'vehicleBook.php',
        data: {
            plate_no: KDA 204B,
            price: price,
            pri_key: pri_key
        },
        success: function(data) {
            // Update the #vehicle-book section on index.php with the received content
            $('#vehBook').html(data);
        },
        error: function() {
            alert('Failed to retrieve booking data.');
        }
    });
}
</script> 