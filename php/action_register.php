<?php
	require_once('db.php');
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		echo json_encode($_POST);
		if(isset($_POST['create']) 
			&& isset($_POST['email']) 
			&& isset($_POST['password'])
			&& isset($_POST['fullname'])){
			$email = $_POST['email'];
			$password = $_POST['password'];
			$fullname = $_POST['fullname'];
			$query = "INSERT INTO users(fullname,email,password) VALUES('$fullname','$email','$password')";
			$result = mysqli_query($db,$query);
			if(mysqli_affected_rows($db) == 1){
				header("location: ../choose.php");
			}else{
				header("location: ../index.php?error='failed'");
			}
		}
	}else{
		header('location: ../index.php');
	}
?>