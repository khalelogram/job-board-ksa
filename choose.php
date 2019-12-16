<?php

	if(isset($_COOKIE['user'])){
		require_once('php/db.php');
		$id = $_COOKIE['user'];
		$query = "SELECT id FROM users WHERE id = '$id'";
		$result = mysqli_query($db,$query);
		if(mysqli_num_rows($result) != 1){
			header("location: ./");
		}
	}else{
		header("location: ./");
	}
	$justLoggedIn = false;
	if(isset($_GET['loggedIn'])){
		$justLoggedIn = true;
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
	<div class="container-fluid">
		<div class="row" style="min-height: 100vh">
			<div class="col-12 col-md-6 d-flex flex-column align-items-center justify-content-center">
				<h2 class="text-center">Looking for a job?</h2>
				<a href="search.php"><button class="btn btn-info">Click Here</button></a>
			</div>
			<div class="col-12 col-md-6 bg-info text-white d-flex flex-column align-items-center justify-content-center">
				<h2 class="text-center">Offering a job?</h2>
				<a href="posting.php"><button class="btn btn-light">Click Here</button></a>
			</div>
		</div>		
	</div>
	<!-- END HTML Here -->
	<!-- Jquery Plugin -->
	<script type="text/javascript" src="./lib/jquery/jquery.min.js"></script>
	<!-- Bootstrap Plugin -->
	<script type="text/javascript" src="./lib/bootstrap/js/bootstrap.min.js"></script>
	<!-- Sweet Alert Plugin -->
	<script src="./lib/sweetalert2/sweetalert.min.js"></script>
	<!-- Custom JS -->
	<script>
		$(document).ready(function(){
			let justLoggedIn = "<?php echo $justLoggedIn; ?>";
			if(justLoggedIn){
				Swal.fire({
					icon: 'success',
					title: 'Logged in successfully',
					timer: 1300,
					showConfirmButton: false,
				});
			}
		});
	</script>
</body>
</html>