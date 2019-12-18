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

<?php
	
	$db = mysqli_connect('localhost','root','','job-board');

	if(!$db){
		die("Failed to connect to database");
	}

?>