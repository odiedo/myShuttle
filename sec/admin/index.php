<!DOCTYPE html>
<header>
    <title>Eldoret Shuttle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
        <!-- to be deleted -->
    <link href="../../../hostels/hostel/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../../hostels/hostel/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../hostels/hostel/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
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


body {
background-color: #003;
}
@media (min-width: 991.98px) {
main {
padding-left: 240px;
}
}

/* Sidebar */
.sidebar {
position: fixed;
top: 0;
bottom: 0;
left: 0;
padding: 58px 0 0; /* Height of navbar */
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
width: 240px;
z-index: 600;
}

@media (max-width: 991.98px) {
  .sidebar {
  width: 100%;
  }
}
.sidebar .active {
border-radius: 5px;
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
position: relative;
top: 0;
height: calc(100vh - 48px);
padding-top: 0.5rem;
overflow-x: hidden;
overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.robot-jarvis a{
  background-color: transparent;
  color: ghostwhite;
  width: 100%;
}
.robot-jarvis a:hover{
  cursor: pointer;
  background-color: papayawhip;
  border: 1px solid white;
  color: orange;
  width: 100%;
}
.position-sticky{
  background-color: #001;
}
.rob-row a {
  text-decoration: none;
}
.robot-card {
  width: 95%;

}
.robot-card:hover {
  transition-delay: initial;
  width: 100%;
  box-shadow: 0 4px 5px 0 antiquewhite; 
  border: 1px solid white;
  color: white;
  cursor: pointer;
}
.robot-header{
  color: chocolate;
}
    </style>
</header>    
<body style="background-color: #000;" oncontextmenu="return false;">
<!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse"  style="background-color: #001; border-right: 1px solid whitesmoke;"><br>
      <div class="position-sticky">
        <div class="list-group robot-jarvis list-group-flush mt-4">
          <a href="index.php" class="list-group-item text-warning list-group-item-action mt-1 py-2 ripple" aria-current="true" style="border-radius: 12px;">
            <i class="fa fa-dashboard fa-fw me-3"></i><span> Dashboard</span>
          </a>
          <a href="booking.php" class="list-group-item list-group-item-action py-2 ripple mt-1"  style="border-radius: 12px;">
            <i class="fa fa-ticket fa-fw me-3"></i><span>Bookings</span>
          </a>
          <a href="passengers.php" class="list-group-item list-group-item-action py-2 ripple mt-1" style="border-radius: 12px;"> 
            <i class="fa fa-users fa-fw me-3"></i><span>Passengers</span></a>
          <a href="route.php" class="list-group-item list-group-item-action py-2 ripple mt-1" style="border-radius: 12px;">
            <i class="fa fa-map fa-fw me-3"></i><span>Loading - Vehicle</span>
          </a>
          <a href="route_insertion.php" class="list-group-item list-group-item-action py-2 ripple mt-1" style="border-radius: 12px;">
            <i class="fa fa-map-pin fa-fw me-3"></i><span>Route Insertion</span>
          </a>
          <a href="vehicle.php" class="list-group-item list-group-item-action py-2 mt-1 ripple mt-1"  style="border-radius: 12px;">
            <i class="fa fa-edit fa-fw me-3"></i><span>Registration</span></a>
          <a href="faq.php" class="list-group-item list-group-item-action py-2 mt-1 ripple mt-1" style="border-radius: 12px;">
            <i class="fa fa-question fa-fw me-3"></i><span>FAQ</span></a>
          <hr>
          <a href="daily_sales.php" class="list-group-item list-group-item-action py-2 ripple" style="border-radius: 12px;">
            <i class="fa fa-calendar fa-fw me-3"></i><span>Daily Sales</span></a>
          <a href="sales.php" class="list-group-item list-group-item-action py-2 mt-1 ripple mt-2" style="border-radius: 12px;">
            <i class="fa fa-money fa-fw me-3"></i><span>Sales</span></a>
          <a href="users.php" class="list-group-item list-group-item-action py-2 mt-2 ripple mt-2" style="border-radius: 12px;">
            <i class="fa fa-user-circle-o fa-fw me-3"></i><span>Profile</span></a>
          </div>
        </div>
      </nav>
      <!-- Sidebar -->

      <!-- Navbar -->
      <nav id="main-navbar" class="navbar robotica navbar-expand-lg fixed-top" style="background-color: #001; box-shadow: 0 2px 2px 0 paleturquoise;">
              <!-- Container wrapper -->
        <div class="container-fluid">
          <!-- Toggle button -->
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>
                <!-- Brand -->
          <a class="navbar-brand" href="#">
            <center><img src="../assets/img/2.jpg" height="25" class="p-1" alt="user" loading="lazy" style="width: 40px; height: 40px; border-radius: 50%; border: 1px solid white;" /><br><span style="font-family: cursive; color: white; font-size: 12px;">Malaba Station</span>
            </center>
          </a>
          <div class="d-none d-md-flex input-group w-auto my-auto">
            <span class="robot-header h3" style="text-shadow: 0px 1px 1px yellow;"><b><i class="fa fa-dashboard"></i> Dashboard</b></span>
          </div>
          <!-- Right links -->
          <ul class="navbar-nav ms-auto d-flex flex-row">
            <!-- Notification dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell"></i>
                <span class="badge rounded-pill badge-notification bg-danger">1</span>
              </a>
            </li>
          </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
          <!--Main Navigation-->

          <!--Main layout-->
          <main style="margin-top: 58px;"><br><br>
            <div class="container pt-4">
              <div class="row">
                <hr class="bg-dark">
                <!-- Begin Page Content -->
                      <div class="container-fluid">

                          <!-- Content Row -->
                          <div class="row">

                              <!-- Vehicle Booking -->
                              <div class="col-xl-3 col-md-3 mb-4">
                                  <center><div class="card border-top-0 robot-card border-right-0 border-bottom-0 bg-transparent h-100 py-2" style="  box-shadow: 0 4px 5px 0 #8A080A;border: 1px solid #8A080A;">
                                      <div class="card-body">
                                          <div class="rob-row">
                                            <a href="booking.php" class="no-gutters align-items-center row">
                                                <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                      Vehicle Booking</div>
                                                  <div class="h5 mb-0 font-weight-bold text-light">
                                                      <div id="booking">
                                                          500
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-auto">
                                                  <i class="fa fa-ticket fa-2x text-danger"></i>
                                              </div>
                                            </a>
                                          </div>
                                      </div>
                                  </div></center>
                              </div>

                              <!-- Vehicle available -->
                              <div class="col-xl-3 col-md-3 mb-4">
                                  <center><div class="card border-top-0 robot-card border-right-0 border-bottom-0 bg-transparent h-100 py-2" style="box-shadow: 0 4px 5px 0 #1d9110; border: 1px solid #1d9110;">
                                      <div class="card-body rob-row">
                                          <a href="booking.php" class="row no-gutters align-items-center">
                                              <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                  <div class="text-xs font-weight-bold text-success text-uppercase">Vehicle Available</div>
                                                  </div>
                                                  <div class="h5 mb-0 font-weight-bold text-light">
                                                      <div id="vehicle">
                                                          7
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-auto">
                                                  <i class="fa fa-bus fa-2x text-success"></i>
                                              </div>
                                          </a>
                                      </div>
                                  </div></center>
                              </div>

                              <!-- Routes -->
                              <div class="col-xl-3 col-md-3 mb-4">
                                  <center><div class="card border-top-0 robot-card border-right-0 border-bottom-0 bg-transparent h-100 py-2" style="box-shadow: 0 4px 5px 0 #0d17d6; border: 1px solid #0d17d6;">
                                      <div class="card-body rob-row">
                                          <a href="route.php" class="row no-gutters align-items-center">
                                              <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase">Load & Release</div>
                                                  </div>
                                                  <div class="h5 mb-0 font-weight-bold text-light">
                                                      <div id="vehicle">
                                                          7
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-auto">
                                                  <i class="fa fa-map fa-2x text-primary"></i>
                                              </div>
                                          </a>
                                      </div>
                                  </div></center>
                              </div>

                              <!-- Passengers  -->
                              <div class="col-xl-3 col-md-3 mb-4">
                                  <center><div class="card border-top-0 robot-card border-right-0 border-bottom-0 bg-transparent h-100 py-2" style="box-shadow: 0 4px 5px 0 orange; border: 1px solid orange;">
                                      <div class="card-body rob-row">
                                          <a href="passengers.php" class="row no-gutters align-items-center">
                                              <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    <div class="text-xs font-weight-bold text-warning text-uppercase">Passengers</div>
                                                  </div>
                                                  <div class="h5 mb-0 font-weight-bold text-light">
                                                      <div id="vehicle">
                                                          700
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-auto">
                                                  <i class="fa fa-users fa-2x text-warning"></i>
                                              </div>
                                          </a>
                                      </div>
                                  </div></center>
                              </div>
                            </div>
                          <div class="row">

                              <!-- Bookings -->
                              <div class="col-xl-3 col-md-3 mb-4">
                                  <center><div class="card border-top-0 robot-card border-right-0 border-bottom-0 bg-transparent h-100 py-2" style="box-shadow: 0 4px 5px 0 ghostwhite; border: 1px solid ghostwhite;">
                                      <div class="card-body rob-row">
                                          <a href="vehicle.php" class="row no-gutters align-items-center">
                                              <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                                                      Registration</div>
                                                  <div class="h5 mb-0 font-weight-bold text-light">
                                                      <div id="booking">
                                                          123
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-auto">
                                                  <i class="fa fa-edit fa-2x text-light"></i>
                                              </div>
                                          </a>
                                      </div>
                                  </div></center>
                              </div>
                              <!-- Emergency Alert -->
                              <div class="col-xl-3 col-md-3 mb-4">
                                  <center><div class="card border-top-0 robot-card border-right-0 border-bottom-0 bg-transparent h-100 py-2" style="box-shadow: 0 4px 5px 0 blueviolet; border: 1px solid blueviolet;">
                                      <div class="card-body rob-row">
                                          <a href="faq.php" class="row no-gutters align-items-center">
                                              <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: blueviolet;">
                                                      FAQ</div>
                                                  <div class="h5 mb-0 font-weight-bold text-light">
                                                      <div id="booking">
                                                          123
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-auto">
                                                  <i class="fa fa-question fa-2x" style="color: blueviolet;"></i>
                                              </div>
                                          </a>
                                      </div>
                                  </div></center>
                              </div>
                              <!-- Emergency Alert -->
                              <div class="col-xl-3 col-md-3 mb-4">
                                  <center><div class="card border-top-0 robot-card border-right-0 border-bottom-0 bg-transparent h-100 py-2" style="box-shadow: 0 4px 5px 0 chartreuse; border: 1px solid chartreuse;">
                                      <div class="card-body rob-row">
                                          <a href="route_insertion.php" class="row no-gutters align-items-center">
                                              <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: chartreuse;">
                                                    Route Insertion</div>
                                                  <div class="h5 mb-0 font-weight-bold text-light">
                                                      <div id="booking">
                                                          8V
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-auto">
                                                  <i class="fa fa-map-pin fa-2x" style="color: chartreuse;"></i>
                                              </div>
                                          </a>
                                      </div>
                                  </div></center>
                              </div>
                              <div class="col-xl-3 col-md-3 mb-4">
                                  <center><div class="card border-top-0 robot-card border-right-0 border-bottom-0 bg-transparent h-100 py-2" style="box-shadow: 0 4px 5px 0 darkgray; border: 1px solid darkgray;">
                                      <div class="card-body rob-row">
                                          <a href="daily_sales.php" class="row no-gutters align-items-center">
                                              <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: darkgray;">
                                                    Daily Report</div>
                                                  <div class="h5 mb-0 font-weight-bold text-light">
                                                      <div id="booking">
                                                          8V
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-auto">
                                                  <i class="fa fa-print fa-2x" style="color: darkgray;"></i>
                                              </div>
                                          </a>
                                      </div>
                                  </div></center>
                              </div>



                            </div>
                          <div class="row">
                            <div class="col-md-4" style="border: 1px dashed green;">
                              <marquee class="text-success" height="200px" direction="up">
                                ********Available Routes********<br>
                              <?php
                              include '../include/conn.php';
                              $sql = "SELECT * FROM routes";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {
                                  while($row = mysqli_fetch_assoc($result)) {
                                  $start = $row['start'];
                                  $end = $row['end'];
                                  $price = $row['price'];?>
                                  <?php echo $start; ?>>>><?php echo $end; ?> <?php echo $price; ?><br>
                                  <?php echo $start; ?>>>><?php echo $end; ?> <?php echo $price; ?><br>
                                  <?php echo $start; ?>>>><?php echo $end; ?> <?php echo $price; ?><br>
                                  <?php echo $start; ?>>>><?php echo $end; ?> <?php echo $price; ?><br>
                              <?php
                              } 
                              }else{
                                  echo "
                                      <script>
                                          alert('There is an error. Plese try again!');
                                      </script>
                                  ";
                              }?>********Thank You********
                              </marquee>
                            </div>
                            <div class="col-md-6" style="border: 1px dashed blue;">
                              <marquee class="text-info" height="200px" direction="up">
                                ************************Bookings********************************<br>
                              <?php
                              $sql = "SELECT * FROM booking";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {
                                  while($row = mysqli_fetch_assoc($result)) {
                                  $pri_key = $row['pri_key'];
                                  $number_plate = $row['number_plate'];
                                  $lname = $row['lname'];
                                  $date = $row['booked_date'];
                                  $seat = $row['seat_no'];?>
                                  #<?php echo $pri_key; ?> <?php echo $date; ?> <?php echo $lname; ?> <?php echo $seat; ?> <?php echo $number_plate; ?><br>
                                  #<?php echo $pri_key; ?> <?php echo $date; ?> <?php echo $lname; ?> <?php echo $seat; ?> <?php echo $number_plate; ?><br>
                                  #<?php echo $pri_key; ?> <?php echo $date; ?> <?php echo $lname; ?> <?php echo $seat; ?> <?php echo $number_plate; ?><br>
                                  #<?php echo $pri_key; ?> <?php echo $date; ?> <?php echo $lname; ?> <?php echo $seat; ?> <?php echo $number_plate; ?><br>
                              <?php
                              } 
                              }else{
                                  echo "
                                      <script>
                                          alert('There is an error. Plese try again!');
                                      </script>
                                  ";
                              }?> ***************************Thank You***************************
                              </marquee>
                            </div>
                          </div>
                          <!-- Content Row -->










              </div>       
            </div>
          </main>
          <!--Main layout-->
</body>
</html>