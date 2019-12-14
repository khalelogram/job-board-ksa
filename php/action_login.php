<?php
	require_once('db.php');
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if(isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password'])){
			$email = $_POST['email'];
			$password = $_POST['password'];
			$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
			$result = mysqli_query($db,$query);
			if(mysqli_num_rows($result) == 1){
				header("location: ../choose.php");
			}else{
				header("location: ../index.php?error=failed");
			}
		}
	}else{
		header('location: ../index.php');
	}
?>