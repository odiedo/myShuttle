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
    </style>
</header>    
<body style="background-color:#000;" oncontextmenu="return false;">
<div class="container">
<?php include('../../include/conn.php');?>
<div class="container">
    <div class="row mt-2">
        <div class="col-md-4 p-2" style="box-shadow: 1px 1px 4px 0px green;">
            <form action="../vehicle_reg.php" method="POST">
                <div class="row">
                    <div class="col-md-12 text-center text-success">
                        <h4>Vehicle Registration</h4>
                    </div>
                </div>
                <div class="row text-light">
                    <div class="col-xm-4 col-sm-4 col-md-4">
                        <label>Number Plate:<i class="text-danger">*</i></label>
                        <input type="text" name="number_plate" class="form-control bg-transparent" required autocomplete="off">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-12">
                        <center><input type="submit" class="btn btn-success bg-transparent" name="save" value="Save Vehicle"></center>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
               

</script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

<!-- Bootstrap JS Requirements -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
