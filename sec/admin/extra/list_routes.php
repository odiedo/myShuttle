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
include('../../include/conn.php');
?>
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="card bg-transparent col-md-12" style="top: px;">
                            <div class="col-md-12">
                                <table class="table border-0" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-info"> 
                                      <tr class="bg-dark">
                                          <th class=""><span class="pl-4">From</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                          <th class="pl-4"><span>To</span></th>
                                          <th class=""><span class="pl-4"></span></th>
                                          <th class="pl-4">Price</th>
                                      </tr>
                                  </thead>
                                  <tfoot class="text-info bg-dark">
                                      <tr>
                                          <th class=""><span class="pl-4">From</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                          <th class="pl-4"><span>To</span></th>
                                          <th class=""><span class="pl-4"></span></th>
                                          <th class="pl-4">Price</th>
                                      </tr>
                                  </tfoot>
                            <?php   
                                $sql = "SELECT * FROM routes ";
                                $result = mysqli_query($conn, $sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                  // output data of each row
                                  while($row = mysqli_fetch_assoc($result)) {
                                    $start = $row['start'];
                                    $end = $row['end'];
                                    $price = $row['price'];
                            ?>
                                    <tr class="text-light" style="font-size: 11px;">
                                        <td class="pl-4 text-light"><b><span class="text-light"><?php echo $start; ?></span></b></td>
                                        <td class="pl-4 text-light"><b>> > ></td>
                                        <td class="pl-4 text-light"><b><?php echo $end; ?></b></td>
                                        <td class="pl-4"><b>Kshs. <?php echo $price; ?></b></td>
                                    </tr>
                                <?php                                   }
                                } else { ?>
                                <div class="row">
                                	<div class="col-md-4">
                                		
                                	</div>
                                	<div class="col-md-4">
                                		<p class="text-light text-center h3" style="font-family:cursive; font-style: italic;"><i class="fa fa-ticket"></i> 0 booking at the moment!</p>
                                	</div>
                                	<div class="col-md-4">
                                		
                                	</div>
                                </div>
                                <?php }
                                
                                mysqli_close($conn);
                                ?>               </table>
                  
                                

                            </div>
  <!-- Nav tabs -->


<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

<!-- Bootstrap JS Requirements -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
