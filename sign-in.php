<?php
	require ('sec/include/conn.php');
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$query = mysqli_query($conn, "SELECT phone, password FROM passengers WHERE phone = '$phone'");
	$result = mysqli_fetch_assoc($query);

	if (mysqli_affected_rows($conn) == 1){
		if (password_verify($password, $result['password'])) {
			session_start();
			$_SESSION['phone']=$phone;
			echo "<script>window.location='sec/index.php?success+';</script>";
		} else {
			echo "<script>window.location='index.php?wrongpass+';";
			echo "alert('Please check Your Login Credentials!!!');</script>";
		}
	} else {
		echo "<script>window.location='index.php?wrongpass+';";
		echo "alert('Invalid Phone Number/password!');</script>";
	}

?>