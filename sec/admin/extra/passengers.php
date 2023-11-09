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
<div class="container">
  <div class="row">
    <div class="col-md-12">
        <!-- Case Lists -->
        <div class="card shadow bg-transparent mb-4">
            <div class="card-body" style="background-color: #00011a">
                <div class="table-responsive">
                    <table class="table border-0 table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-light"> 
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Join Date</th>
                            </tr>
                        </thead>
                        <tfoot class="text-light">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Join Date</th>
                            </tr>
                        </tfoot>
                        <tbody style="background-color: rgba(0, 0, 0, .5);">
                        <?php
                        $query = "SELECT * FROM passengers ORDER BY passenger_id ASC";
                        $result = $conn->query($query);
                        if($result->num_rows>0){
                            while ($row = $result->fetch_assoc()) {
                            // code...
                                $fname = $row['fname'];
                                $lname = $row['lname'];
                                $phone = $row['phone'];
                                $date = $row['join_date'];
                            ?>
                            <tr>
                                <td class="text-warning"><span class="text-uppercase"><b><?php echo $lname; ?></b></span> <?php echo $fname; ?></td>
                                <td class="text-light">0<?php echo $phone; ?></td>
                                <td class="text-success">100%</td>
                                <td class="text-light"><?php echo $date; ?></td>
                            </tr><?php    }}?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>
<?php }?>