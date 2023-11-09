<html>
<head>
    <title>myShuttle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- to be deleted -->
    <link href="../../hostels/hostel/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <link type="text/css" rel="stylesheet" href="sec/assets/fonts/flaticon/font/flaticon.css">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="sec/assets/img/shuttle.jpg" type="image/x-icon" >

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="style.css">
    <!-- Jquery -->
    <script type="text/javascript" src="sec/include/jquery-1.10.2.min.js" ></script>
</head>
<body>
<section id="login">
    <div class="container">
        <div class="login-header">
            <h2>
                myShuttle <br>
                <i class="fa fa-user-circle-o" aria-hidden="true"></i><br>
                Login
            </h2>
        </div>
        <p class="login-msg" style="font-weight: 900; font-size: 12px;">Enter Your Login Credentials</p>
        <form action="sign-in.php" method="POST">
            <label for="phone">Phone:</label>
            <div class="inputs">
                <i class="fa fa-phone" aria-hidden="true"> +254</i>
                <input type="tel" name="phone" id="phone" placeholder="Enter Phone Number" autocomplete="off" required>
            </div>
            <label for="password">Password:</label>
            <div class="inputs">
                <i class="fa fa-key" aria-hidden="true"></i>
                <input type="password" name="password" id="pass" placeholder="Enter Your Pasword" autocomplete="off" required>
            </div>
            <br>
            <button type="submit" name="login" class="login">>> Login <<</button>
        </form>
        <span>**********************</span><br>
        <i class="msg">Travel Fast, Travel Safe</i>
        <hr>
        <div class="log_forgot">
            <a href="#">Forgot Password?</a>
            <a href="#"  onclick="regi()">>>Register Now!</a>
        </div>
    </div>
</section>


<!-- Registration Section -->
<section id="reg">
    <div class="container">
        <div class="reg-header">
            <h2>
                <i>myShuttle</i>
                <i>Create account</i>
            </h2>
        </div>
        <p class="reg-msg" style="color:grey; font-size: 12px; font-weight:900;">Enter your details below and click create account to register an account.</p>
        <form action="sign-up.php" method="POST">
            <label for="firstName">First Name:</label>
            <div class="inputs">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="fname" id="fname" placeholder="Enter First Name" autocomplete="off" required>
            </div>
            <label for="lastName">Last Name:</label>
            <div class="inputs">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="lname" id="lname" placeholder="Enter Last Name" autocomplete="off" required>
            </div>
            <label for="phone">Phone:</label>
            <div class="inputs">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input type="tel" name="phone" id="phone" placeholder="Enter Phone Number" autocomplete="off" required>
            </div>
            <label for="email">Email Address:</label>
            <div class="inputs">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="email" name="email" id="email" placeholder="Enter Email Address" autocomplete="off" required>
            </div>
            <label for="password">Password:</label>
            <div class="inputs">
                <i class="fa fa-key" aria-hidden="true"></i>
                <input type="password" name="password" id="pass" placeholder="Enter Pasword" autocomplete="off" required>
            </div>
            <br>
            <button type="submit" name="save" class="login">>> Create Account <<</button>
        </form>
        <hr>
        <div class="reg_forgot">
            Have an account?
            <a href="#" onclick="logi()">Login Now!</a>
        </div>
        <i class="msg">Travel Fast, Travel Safe</i>
    </div>
</section>

<!-- <div class="container m-safe">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline bg-transparent">
                <div class="card-body">
                    <h2 style="font-family: cursive;" class="text-warning text-center">Eldoret Shuttle <br><i style="font-size:60px;" class="fa fa-user-circle text-warning"><br><span class="text-center inst text-light h4">Login</span></i></h2></center>
                        <form action="sign-in.php" method="post">
                            <div class="login" style="font-family: agency fb;">
                                <input type="tel" name="phone" placeholder="Phone" autocomplete="off" class="form-control border-top-0 text-warning w-100 border-right-0 border-left-0 border-warning bg-transparent" required><br>
                                <input type="password" name="password" placeholder="Password" class="form-control border-top-0 w-100 text-warning border-right-0 border-left-0 bg-transparent border-warning" required><br>
                                <button class="bg-transparent w-100 btn btn-warning text-warning" name="submit" onmousedown="login()" style="font-family: cursive;">>> Login <<</button>            
                            </div>
                        </form>
                        <h6 class="text-center text-danger">or</h6>
                        <center><span>*************************</span></center>
                    <p class="text-light text-center" style="font-family: cursive;"><i> Register now, Travel Fast, Travel Safe</i></p>
                    <p style="text-align: right;"><a href="reg.php" class="text-danger btn btn-danger bg-transparent">>>Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->



<script src="js.js"></script>
</body>
</html>