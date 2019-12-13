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
	<div class="login-page">
	  <div class="form">
	  	<h3>Job Board KSA</h3>
	    <form method="POST" action="php/action_register.php"  class="register-form">
	      <input class="control" type="text" placeholder="Full Name" name="fullname" required />
	      <input class="control" type="password" placeholder="Password" name="password" required />
	      <input class="control" type="email" placeholder="Email Address" name="email" required />
	      <input class="btn-dre" type="submit" name="create" value="create">
	      <p class="message">Already registered? <a href="#">Sign In</a></p>
	    </form>
	    <form method="POST" action="php/action_login.php" class="login-form">
	      <input class="control" type="email" placeholder="Email Address" name="email" required />
	      <input class="control" type="password" placeholder="Password" name="password" required />
	      <input class="btn-dre" type="submit" name="login" value="login">
	      <p class="message">Not registered? <a>Create an account</a></p>
	    </form>
	  </div>
	</div>
	<!-- END HTML Here -->
	<!-- Jquery Plugin -->
	<script type="text/javascript" src="./lib/jquery/jquery.min.js"></script>
	<!-- Bootstrap Plugin -->
	<script type="text/javascript" src="./lib/bootstrap/js/bootstrap.min.js"></script>
	<!-- CUSTOM JS -->
	<script type="text/javascript" src="js/login.js"></script>
</body>
</html>