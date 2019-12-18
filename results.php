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
	<style>
	body{
		background: linear-gradient(to left, #019bf5, #acc9f7)
	}
	figure {
	    border: thin #c0c0c0 solid;
	    display: flex;
	    flex-flow: column;
	    padding: 5px;
	    max-width: 120px;
	    margin: auto;
	}
	.panel-body{
		padding: 15px;
	}
	p {
	  font-family: "Times New Roman", Times, serif;
	}
	.padding-bottom-60 {
	    padding-bottom: 60px;
	}
	</style>
</head>
<body>
	<?php include_once('nav.php'); ?>
	<!-- Start HTML Here -->
	<div id="main">

 <section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-4 text-center">
            <h2 class="section-title mb-2"><strong>All Jobs</h2></strong>
          </div>
        </div>
 		
        
        <?php 
        	require_once("php/db.php");
        	$query = "SELECT * FROM jobs";
        	$result = mysqli_query($db,$query);
        	while($row = mysqli_fetch_assoc($result)){
				echo "<span><div class='col-mb-3'>
			          <div class='row align-items-center job-item border-bottom pb-3 mb-3 pt-3'>
			            <div class='col-md-2'>
			              <a href='job-single.html'></a>
			            </div>
			            <div class='col-md-3 text-md-left'>
			              <h2>".$row["title"]."</a> </h2>
			             ".$row["company_name"]."
			            </div>
			            <div class='col-md-3 text-left'>
			              <span class='meta'>".$row["location"]."</span>
			            </div>
			            <div class='col-md-3 text-md-left'>
			             <button type='btn' class='btn btn-warning'><a href='details.php?id=".$row["id"]."'><font color='black'>See More Details</button></a></font>
			            </div>
			          </div>";
        	}
        ?>

        <div class="row pagination-wrap">

          <div class="col-6 text-center text-md-left">
            <div class="custom-pagination ml-auto">
              <a href="#" class="prev">Previous</a>
              <div class="d-inline-block">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
              </div>
              <a href="#" class="next">Next</a>
            </div>
          </div>
        </div>
    </section>
    <br>
    <div class="container-fluid bg-2 text-center"><center><strong><h2>Top Employers</strong></center></div>
 	<br><br>
 	<div class="row">
 		<figure><img src="./img/metro-logo.jpg" width="100px" height="100px"></figure>
 		<figure><img src="./img/startek-logo.jpg" width="100px" height="100px"></figure>
        <figure><img src="./img/sm-logo.jpg" width="100px" height="100px" ></figure>
        <figure><img src="./img/meralco-logo.jpg" width="100px" height="100px"></figure>
        <figure><img src="./img/optum-logo.jpg" width="100px" height="100px"></figure>
        <figure><img src="./img/citiglobal-logo.jpg" width="100px" height="100px"></figure>
        <figure><img src="./img/metrobank-logo.jpg" width="100px" height="100px"></figure>

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