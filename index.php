<?php

	if(isset($_COOKIE['user'])){
		require_once('php/db.php');
		$id = $_COOKIE['user'];
		$query = "SELECT id FROM users WHERE id = $id";
		$result = mysqli_query($db,$query);
		if(mysqli_num_rows($result) == 13){
			header("location: choose.php");
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Job Board</title>
	<!-- RESPONSIVE TAG -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap/css/bootstrap.min.css">
	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!-- Start HTML Here -->
	<div class="forms d-flex">
		<form id="login" method="POST" class="content">
			<h3 class="text-center">Job Board Login</h3>
			<hr>
			<label for="email">E-mail:</label>
			<input class="form-control" type="email" name="email" placeholder="yourmail@jobs.com" required>
			<label for="password">Password:</label>
			<input class="form-control" type="password" name="password" placeholder="******" required>
			<div class="d-flex justify-content-between align-items-center">
				<div>Don't have an account? <a href="#register">Sign Up</a></div>
				<button class="btn btn-info">Login</button>
			</div>
		</form>
		<form id="register" method="POST" class="content">
			<h3 class="text-center">Job Board Sign Up</h3>
			<hr>
			<label for="email">Full Name:</label>
			<input class="form-control" type="text" name="name" placeholder="Juan Dela Cruz" required>
			<label for="email">E-mail:</label>
			<input class="form-control" type="email" name="email" placeholder="yourmail@jobs.com" required>
			<label for="password">Password:</label>
			<input class="form-control" minlength="4" type="password" name="password" placeholder="******" required>
			<label for="r_password">Repeat Password:</label>
			<input class="form-control" minlength="4" type="password" name="r_password" placeholder="******" required>
			<div class="d-flex justify-content-between align-items-center">
				<div>Already have an account? <a href="#login">Login</a></div>
				<button class="btn btn-info">Sign Up</button>
			</div>
		</form>
	</div>
	<!-- END HTML Here -->
	<!-- Jquery Plugin -->
	<script type="text/javascript" src="./lib/jquery/jquery.min.js"></script>
	<!-- Bootstrap Plugin -->
	<script type="text/javascript" src="./lib/bootstrap/js/bootstrap.min.js"></script>
	<!-- Sweet Alert Plugin -->
	<script src="./lib/sweetalert2/sweetalert.min.js"></script>
	<!-- CUSTOM JS -->
	<script type="text/javascript" src="./js/index.js"></script>
</body>
</html>