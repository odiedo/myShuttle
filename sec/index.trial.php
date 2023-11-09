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
    <!-- External CSS libraries -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
<div class="tile" id="tile-1">
  <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade" id="parcel" role="tabpanel" aria-labelledby="parcel-tab">        <div class="container">
            <div class="row">
              <div class="col-md-4 bg-transparent">
              <div class="panel-group" id="accordion">           
                <div class="card-body">
                <div class="faqHeader text-info text-center">Frequently Asked Questions (FAQ)</div>
                    <div class="panel panel-default" style="border: 1px solid white; padding-left: 21px;">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a class="accordion-toggle h6 text-warning" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">How to book a vehicle?</a>
                          </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                          <div class="panel-body text-light">
                              Account registration at <strong>PrepBootstrap</strong> is only required if you will be selling or buying themes. 
                              This ensures a valid communication channel for all parties involved in any transactions. 
                          </div>
                      </div>
                    </div>


                    <div class="panel panel-default" style="border: 1px solid white; padding-left: 21px;">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a class="accordion-toggle h6 text-warning" data-toggle="collapse" data-parent="#accordion" href="#collapse2">How to cancel your booking online?</a>
                          </h4>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse in">
                          <div class="panel-body text-light">
                              Account registration at <strong>PrepBootstrap</strong> is only required if you will be selling or buying themes. 
                              This ensures a valid communication channel for all parties involved in any transactions. 
                          </div>
                      </div>
                    </div>
                </div>

                
                </div>
              </div>
            </div>
          </div></div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="container">
            <div class="row">
              <div class="col-md-4 card bg-transparent">
                <div class="card-header text-success">My Parcel(s)</div>
                <div class="card-body">
                  <span class="fa "></span>
                <span>No Parcel at the moment</span>

                </div>
              </div>
            </div>
          </div>  

        </div>
        <div class="tab-pane fade" id="profil" role="tabpanel" aria-labelledby="file-tab">

        </div>
        <div class="tab-pane fade" id="file" role="tabpanel" aria-labelledby="pro-tab">
              <div class="card bg-transparent">
                <div class="card-header text-center h4 text-warning">My Booking(sss)</div>
                <div class="card-body text-success">
                  <p style="padding-left:5px; padding-right: 5px; padding-bottom: 5px; border: 1px dotted" class="bg-transparent border-warning">
                    From: <b class="text-light">Malaba</b><br>
                    To: <b class="text-light">Eldoret</b><br>
                    Departure: <b class="text-light">10:30 PM</b><br>
                    Seat No: <b class="text-light">2B</b><br>
                    Ticket ID: <b class="text-light">2XBVA2016SHTL</b><br>
                    <button><i class="fa fa-print text-warning"></i></button>                    
                  </p>

                  <p style="padding-left:5px; padding-right: 5px; padding-bottom: 5px; border: 1px dotted" class="bg-transparent border-warning">
                    From: <b class="text-light">Malaba</b><br>
                    To: <b class="text-light">Eldoret</b><br>
                    Date: <b class="text-light">27-07-34</b> 
                    Departure: <b class="text-light">10:30 PM</b><br>
                    Seat No: <b class="text-light">2B</b><br>
                    Ticket ID: <b class="text-light">2XBVA2016SHTL</b><br>
                    <button><i class="fa fa-print text-warning"></i></button>                    
                  </p>
                </div>
              </div>
        </div>
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                <img src="assets/img/2.jpg" alt="" style="width: 100%; height: 100px;">
                    <div class="card-header text-light text-center h4">Eldoret Shuttle Online Booking</div>
                    <div class="card-body text-info">
                      <form action="avail.php" method="POST">
                        <label>From: </label><br>
                        <select name="start" class="form-control text-light" style="width: 100%; background-color: #000; font-family: cursive;" required>
                            <option disabled selected> --- From ---</option>
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
                        </select>
                        <br> <br>
                        <input type="submit" name="search" class="bg-transparent text-light fa-search" class="form-control" style="width: 100%;font-family: cursive; border: 1px solid red" value="Submit Searches"><i class=""></i>
                      </form>
                    </div>

                    <?php } } else{
          echo "<script> alert('There was an error. Plese login again later')";
        }?>


        </div>
    </div>
  </div>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-justified justify-content-center" role="tablist" style="position: fixed; bottom: 0; background-color: #0d0214;">
    <div class="slider"></div>
      <li class="nav-item">
        <a class="nav-link" id="file-tab" data-toggle="tab" href="#profil" role="tab" aria-controls="gf" aria-selected="false"> <i class="fa fa-phone  nav-link text-light h4" style="font-size: px; padding: 4px 18px; text-shadow: 0px 0px 4px #ff00f2;"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link border-0" id="home-tab" data-toggle="tab" href="#parcel" role="tab" aria-controls="parcel" aria-selected="false"> <i class="fa fa-question nav-link text-light h4" style="font-size: px; padding: 4px 18px; text-shadow: 0px 0px 4px #ff00f2;"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"> <i class="fa fa-gift nav-link  text-light h4" style="padding: 4px 21px; text-shadow: 0px 0px 4px #ff00f2;"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pro-tab" data-toggle="tab" href="#file" role="tab" aria-controls="hfthy" aria-selected="false"> <i class="fa fa-bus text-light nav-link kenya_danger h4" style="font-size: px; padding: 4px 18px; text-shadow: 0px 0px 4px #ff00f2;"></i> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" id="home" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> <i class="fa fa-home text-light nav-link kenya_danger h4" style="font-size: px; padding: 4px 18px; text-shadow: 0px 0px 4px #ff00f2;"></i></a>
      </li>
  </ul>
</div>
</div>


<script>
$("#tile-1 .nav-tabs a").click(function() {
  var position = $(this).parent().position();
  var width = $(this).parent().width();
    $("#tile-1 .slider").css({"left":+ position.left,"width":width});
});
var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
var actPosition = $("#tile-1 .nav-tabs .active").position();
$("#tile-1 .slider").css({"left":+ actPosition.left,"width": actWidth});

</script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

<!-- Bootstrap JS Requirements -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php }?>