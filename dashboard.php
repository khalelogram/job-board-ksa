<?php

	if(isset($_COOKIE['user'])){
		require_once('php/db.php');
		$id = $_COOKIE['user'];
		$query = "SELECT users.name,
					users.email
					FROM users
					WHERE users.id = '$id'";
		$result = mysqli_query($db,$query);
		if(mysqli_num_rows($result) == 1){
			$user = mysqli_fetch_assoc($result);
			$user['initial'] = substr($user["name"], 0,1);
			$query = "SELECT 
                    jobs.id,
                    jobs.title,
                    jobs.company_name,
                    jobs.description,
                    jobs.location,
                    jobs.timestamp,
                    jobs.employer
					FROM jobs
					LEFT JOIN user_job ON user_job.job = jobs.id
                    WHERE jobs.employer = '$id' OR user_job.user = '$id'";
            $result = mysqli_query($db,$query);
            $posts = array();
            $user["jobs"] = 0;
            $user["posts"] = 0;
            while ($row = mysqli_fetch_assoc($result)) {
            	array_push($posts, $row);
            	if($row["employer"] == $id){
            		$user["posts"]++;
            	}else{
            		$user["jobs"]++;
            	}
            }
		}else{
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
	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!-- Start HTML Here -->
	<?php include_once("./nav.php") ?>
	<div class="container">
		<div class="profile">
			<div style="width: 100px;height: 100px;border-radius: 50%; background-color:white;color: #17a2b8;display: flex;align-items: center; justify-content: center;font-weight: 400;font-size: 50px;"><?php echo $user['initial']; ?></div>
			<div><?php echo $user['name']; ?></div>
			<div class="small"><?php echo $user['email']; ?></div>
			<div>Jobs Applied: <?php echo $user['jobs']; ?></div>
			<div>Jobs Posted: <?php echo $user['posts']; ?></div>
		</div>
		<div class="dashboard">
			<h2 class="text-center">Job Status</h2>

				<ul class="nav nav-pills nav-justified bg-info">
                    <li class="nav-item">
                        <a class="nav-link active text-white" data-toggle="tab" href="#ongoing">Applications</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link text-white" data-toggle="tab" href="#completed">Job Posts</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="ongoing" class="tab-pane active">
                        <table class="table">
                            <tbody id="ongoing-orders">
								<?php 
									foreach ($posts as $post) {
										if($post["employer"] != $id){
											echo "<div class='job-item row align-items-center'>
													<div class='col-sm-4 mb-2'>
														<h5>".$post["title"]."</h5>
														<div class='small'>".$post["company_name"]."</div>
													</div>
													<div class='col-sm-4 mb-2 text-md-center'>
														<div>".$post["location"]."</div>
														<div>Current Status</div>
													</div>
													<div class='col-sm-4 text-center'>
														<a href='details.php?id=".$post["id"]."'>
															<button class='btn btn-info'>More Details</button>
														</a>
													</div>
												</div>";
										}
									}
								?>
                            </tbody>
                        </table>
                    </div>
                    <div id="completed" class="tab-pane fade">
                        <table class="table">
                            <tbody id="completed-orders">
								<?php 
									foreach ($posts as $post) {
										if($post["employer"] == $id){
											echo "<div class='job-item row align-items-center'>
													<div class='col-sm-4 mb-2'>
														<h5>".$post["title"]."</h5>
														<div class='small'>".$post["company_name"]."</div>
													</div>
													<div class='col-sm-4 mb-2 text-md-center'>
														<div>".$post["location"]."</div>
														<div>Current Status</div>
													</div>
													<div class='col-sm-4 text-center'>
														<a href='details.php?id=".$post["id"]."'>
															<button class='btn btn-info'>More Details</button>
														</a>
													</div>
												</div>";
										}
									}
								?>
                            </tbody>
                        </table>
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
</body>
</html>