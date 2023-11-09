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
    <link rel="stylesheet" type="text/css" href="include/style.css">
</header>     
<body style="background-color:#000;" oncontextmenu="return false;" onload="myFunction()" style="margin:0;">
<center><div id="loader" class="p-2" style="margin-top: 230px;"></div></center>
<div class="container mt-1 animate-bottom" style="display:none;" id="myDiv">
  <div class="row">
  	<div class="col-md-4">
  	
  	</div>
  	<div class="col-md-4 p-1">
      <h5 class="breadcrumb pl-4 h5 bg-transparent border-0 text-warning" style="border: 1px #0e24 solid; width: 100%; box-shadow: 0px 3px 3px 0px goldenrod;">
        <center>FAQ <i class="fa fa-question"></i></center>
      </h5>  
      <div class="card  bg-transparent mb-2 mt-2 ">
      <div class="card  bg-transparent" style="box-shadow: 0px 3px 3px 0px goldenrod; height: auto;">
        <div class="card-body text-light text-center">
          <span class="text-warning text-center text-uppercase">FAQ <i class="fa fa-question"></i></span><br>
          <span class="text-light" style="font-family: serif;"><i>Zero question at the moment</span><br>
            <br><br><br><br><br><br><br><br><br><br><br><br>
          <fieldset style="border: 1px solid goldenrod; font-size: 12px;" class="p-2">
            <legend></legend>
            <input type="text" name="quiz" placeholder="Ask a question" style="width: 80%; height: 40px" class="text-light float-left form-control border-warning bg-transparent">
            <button class="fa fa-check btn btn-warning bg-transparent text-warning" style="width: 15%; height: 40px;"></button>
          </fieldset>
        </div>
      </div>
    </div>
    <div class="col-md-4">

    </div>
    </div>
  </div>
<?php include('btm_nav.php');?>
</div>



<script type="text/javascript" src="include/load.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

<!-- Bootstrap JS Requirements -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php } ?>
