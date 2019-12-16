<?php
	require_once('php/db.php');
	if(isset($_COOKIE['user'])){
		$id = $_COOKIE['user'];
		$query = "SELECT id FROM users WHERE id = '$id'";
		$result = mysqli_query($db,$query);
		if(mysqli_num_rows($result) != 1){
			header("location: ./");
		}
	}else{
		header("location: ./");
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
</head>
<body>
	<?php include_once("./nav.php") ?>
	<!-- Start HTML Here -->
	<div class="d-flex flex-column align-items-center mt-2" id="main">
		<h2>Post a Job</h2>
		<form id="createJobForm" class="container form" method="POST">
			Title: <input class="form-control" type="text" name="title" placeholder="Job Title" required><br>
			Company Name: <input class="form-control" type="text" name="company_name" placeholder="Your Company"required><br>
			Job Description: <textarea class="form-control" rows="5" name="description" placeholder="What this job needs" required></textarea><br>
			Location: <input class="form-control" type="text" name="location" placeholder="Where your company is located" required><br>
			<input class="btn btn-info" type="submit" name="post" value="Post">
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
	<script type="text/javascript" src="./js/posting.js"></script>
</body>
</html>