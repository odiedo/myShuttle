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
<div class="container mt-2">
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-transparent" style="box-shadow: 1px 1px 4px 0px lightblue;">
                <div class="card-header text-light text-center h4 fa fa-map-pin text-center text-info h1"><br>Route Insertion</div>
                <div class="card-body text-info">
                    <form action="../route_in.php" method="POST">
                        <label>From: </label><br>
                        <select name="start" class="form-control text-light" style="width: 100%; background-color: #000; font-family: cursive;" required>
                            <option disabled selected> --- From ---</option>
                            <option value="Malaba">Malaba</option>
                            <option value="Bungoma">Bungoma</option>
                            <option value="Eldoret">Eldoret</option>
                            <option value="Nakuru">Nakuru</option>
                            <option value="Nairobi">Nairobi</option>
                        </select>
                        <label>To: </label><br>
                        <select name="end" class="form-control text-light" style="width: 100%; background-color: #000; font-family: cursive;" required>
                            <option value="" disabled selected>--- Destination ---</option>
                            <option value="Malaba">Malaba</option>
                            <option value="Bungoma">Bungoma</option>
                            <option value="Eldoret">Eldoret</option>
                            <option value="Nakuru">Nakuru</option>
                            <option value="Nairobi">Nairobi</option>
                        </select>
                        <label for="price">Price: </label><br>
                        <input type="number" name="price" placeholder="Price" required class="form-control text-light" style="width: 100%; background-color: #000; font-family: cursive;">
                        <br>
                        <input type="submit" name="save" class="bg-transparent text-light fa-search" class="form-control" style="width: 100%;font-family: cursive; border: 1px solid lightblue;" value="Save Route"><i class=""></i>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
            

