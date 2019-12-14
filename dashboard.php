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
		// header("location: ./");
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
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<style>
		.profile{
			width: 280px;
			height: 100vh;
			position: absolute;
			left: 0;
			top: 0;
			bottom: 0;
		}
		.dashboard{
			/*margin-left: 280px;*/
		}
		.job-item{
			border-bottom: 1px dotted #17a2b8;
			padding: 15px;
		}
	</style>
</head>
<body>
	<!-- Start HTML Here -->
	<?php include_once("./nav.php") ?>
	<div class="container">
		<!-- <div class="profile bg-info">
			
		</div> -->
		<div class="" lass="dashboard">
			<h2 class="text-center">Job Status</h2>

			<div class="job-item row align-items-center text-md-center">
				<div class="col-sm-4 mb-2">
					<h4>Title</h4>
					<div>Short Description</div>
				</div>
				<div class="col-sm-4 mb-2">
					<div>Location</div>
					<div>Current Status</div>
				</div>
				<div class="col-sm-4 text-center">
					<a href="details.php?id=1">
						<button class="btn btn-info">More Details</button>
					</a>
				</div>
			</div>
			<div class="job-item row align-items-center text-md-center">
				<div class="col-sm-4 mb-2">
					<h4>Title</h4>
					<div>Short Description</div>
				</div>
				<div class="col-sm-4 mb-2">
					<div>Location</div>
					<div>Current Status</div>
				</div>
				<div class="col-sm-4 text-center">
					<a href="details.php?id=1">
						<button class="btn btn-info">More Details</button>
					</a>
				</div>
			</div>
			<div class="job-item row align-items-center text-md-center">
				<div class="col-sm-4 mb-2">
					<h4>Title</h4>
					<div>Short Description</div>
				</div>
				<div class="col-sm-4 mb-2">
					<div>Location</div>
					<div>Current Status</div>
				</div>
				<div class="col-sm-4 text-center">
					<a href="details.php?id=1">
						<button class="btn btn-info">More Details</button>
					</a>
				</div>
			</div>
			<div class="job-item row align-items-center text-md-center">
				<div class="col-sm-4 mb-2">
					<h4>Title</h4>
					<div>Short Description</div>
				</div>
				<div class="col-sm-4 mb-2">
					<div>Location</div>
					<div>Current Status</div>
				</div>
				<div class="col-sm-4 text-center">
					<a href="details.php?id=1">
						<button class="btn btn-info">More Details</button>
					</a>
				</div>
			</div>
			<div class="job-item row align-items-center text-md-center">
				<div class="col-sm-4 mb-2">
					<h4>Title</h4>
					<div>Short Description</div>
				</div>
				<div class="col-sm-4 mb-2">
					<div>Location</div>
					<div>Current Status</div>
				</div>
				<div class="col-sm-4 text-center">
					<a href="details.php?id=1">
						<button class="btn btn-info">More Details</button>
					</a>
				</div>
			</div>
			<div class="job-item row align-items-center text-md-center">
				<div class="col-sm-4 mb-2">
					<h4>Title</h4>
					<div>Short Description</div>
				</div>
				<div class="col-sm-4 mb-2">
					<div>Location</div>
					<div>Current Status</div>
				</div>
				<div class="col-sm-4 text-center">
					<a href="details.php?id=1">
						<button class="btn btn-info">More Details</button>
					</a>
				</div>
			</div>
			<div class="job-item row align-items-center text-md-center">
				<div class="col-sm-4 mb-2">
					<h4>Title</h4>
					<div>Short Description</div>
				</div>
				<div class="col-sm-4 mb-2">
					<div>Location</div>
					<div>Current Status</div>
				</div>
				<div class="col-sm-4 text-center">
					<a href="details.php?id=1">
						<button class="btn btn-info">More Details</button>
					</a>
				</div>
			</div>
			<div class="job-item row align-items-center text-md-center">
				<div class="col-sm-4 mb-2">
					<h4>Title</h4>
					<div>Short Description</div>
				</div>
				<div class="col-sm-4 mb-2">
					<div>Location</div>
					<div>Current Status</div>
				</div>
				<div class="col-sm-4 text-center">
					<a href="details.php?id=1">
						<button class="btn btn-info">More Details</button>
					</a>
				</div>
			</div>
			<div class="job-item row align-items-center text-md-center">
				<div class="col-sm-4 mb-2">
					<h4>Title</h4>
					<div>Short Description</div>
				</div>
				<div class="col-sm-4 mb-2">
					<div>Location</div>
					<div>Current Status</div>
				</div>
				<div class="col-sm-4 text-center">
					<a href="details.php?id=1">
						<button class="btn btn-info">More Details</button>
					</a>
				</div>
			</div>
			<div class="job-item row align-items-center text-md-center">
				<div class="col-sm-4 mb-2">
					<h4>Title</h4>
					<div>Short Description</div>
				</div>
				<div class="col-sm-4 mb-2">
					<div>Location</div>
					<div>Current Status</div>
				</div>
				<div class="col-sm-4 text-center">
					<a href="details.php?id=1">
						<button class="btn btn-info">More Details</button>
					</a>
				</div>
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
		});
	</script>
</body>
</html>