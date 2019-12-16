
<?php
	require_once("php/db.php");
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

	if(isset($_GET["id"])){
		$jobId = $_GET['id'];
		$query = "SELECT * FROM jobs WHERE id = $jobId";
		$result = mysqli_query($db,$query);
		if(mysqli_num_rows($result) == 1){
			$job = mysqli_fetch_assoc($result);
			$user_job_id = 0;
			$query = "SELECT id FROM user_job WHERE job = $jobId AND user = $id";
			$result = mysqli_query($db,$query);
			if(mysqli_num_rows($result) == 1){
				$user_job_id = mysqli_fetch_assoc($result)["id"];
			}
		}else{
			die("This job no longer exists, <a href='./search.php'>click here</a> to browse other jobs");
		}
	}else{
		header("location: ./search.php");
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


		
		<?php

			require_once("db.php");
        	$query = "SELECT * FROM jobs WHERE id =" . $_GET['id'];
        	$result = mysqli_query($db,$query);
        	if(mysqli_num_rows($result) == 1){
        		$job = mysqli_fetch_assoc($result);
        	}
		?>
		
			


<body>

	<?php include_once('nav.php'); ?>
	<!-- Start HTML Here -->
	<div id="main">
		<h2 class="text-center"><?php echo $job["company_name"]; ?></h2>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 col-md-6">
					<h3><?php echo $job["title"]; ?></h3>
				</div>
				<div class="col-12 col-md-6 text-md-center">
					<div>Location: <?php echo $job["location"]; ?></div>
					<div><?php echo $job["timestamp"]; ?></div>
				</div>
			</div>
			<hr>
			<div class="container">
				<h5>Description</h5>
				<p><?php echo $job["description"]; ?></p>
			</div>
			<hr>
			<div class="row justify-content-center">
				<?php 
					if($user_job_id > 0){
						echo "<button class='btn btn-info'>Cancel Application</button>";
					}else{
						if($job["employer"] == $id){
							echo "<button class='btn btn-info'>Remove This Post</button>";
						}else{
							echo "<button class='btn btn-info'>Apply Now!</button>";
						}
					}
				?>
			</div>
		</div>



	</div>
	<!-- END HTML Here -->
	<!-- Jquery Plugin -->
	<script type="text/javascript" src="./lib/jquery/jquery.min.js"></script>
	<!-- Bootstrap Plugin -->
	<script type="text/javascript" src="./lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>