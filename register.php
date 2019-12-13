<?php include "inc/header.php" ?>

<body>
<div class="container">
  
<div class="page-header">
<div class="well">
  <h2>Register Form</h2>
</div>  
</div>  
  
<form class="form-horizontal" role="form">  

<fieldset>
  
<legend>User Info</legend>
  
<!-- Username -->
<div class="form-group">
<label class="col-lg-3" for="username">Username</label>
<div class="col-lg-9">
<input type="text" name="username" id="username" value="" placeholder="Username" class="form-control" />
</div>
</div>

<!-- Firstname -->
<div class="form-group">
<label class="col-lg-3" for="firstname">First Name</label>
<div class="col-lg-9">
<input type="text" name="firstname" id="firstname" value="" placeholder="Firstname" class="form-control" />
</div>
</div>

<!-- Lastname -->
<div class="form-group">
<label class="col-lg-3" for="lastname">Last Name</label>
<div class="col-lg-9">
<input type="text" name="lastname" id="lastname" value="" placeholder="Lastname" class="form-control" />
</div>
</div>

<!-- Phone Number -->
<div class="form-group">
<label class="col-lg-3" for="lastname">Phone Number</label>
<div class="col-lg-9">
<input type="text" name="phone-number" id="number" value="" placeholder="Phone Number" class="form-control" />
</div>
</div>

<!-- Email -->
<div class="form-group">
<label class="col-lg-3" for="email">Email</label>
<div class="col-lg-9">
<input type="text" name="email" placeholder="Email" value="" class="form-control" />
</div>
</div>

<!-- Upload Image -->


<!-- About Yourself -->
<div class="form-group">
<label class="col-lg-3" for="email">Tell me about yourself
<textarea name="InsertRecordMember_Narrative" id="InsertRecordMember_Narrative" class="cbFormTextArea" style="height:250px;" cols="70" placeholder="Say something about yourself" title="Say something about yourself, previous jobs, etc. ... (optional)"></textarea>
</label>
</div>

</fieldset>

<fieldset>
  
<legend>User Password</legend>  

<!-- Password -->
<div class="form-group">
<label class="col-lg-3" for="password">Password</label>
<div class="col-lg-9">
<input type="password" name="password" id="password" value="" placeholder="Password" class="form-control" />
</div>
</div>

<!-- Confirm Password -->
<div class="form-group">
<label class="col-lg-3" for="confirm_password">Confirm Password</label>
<div class="col-lg-9">
<input type="password" name="confirm_password" value="" id="confirm_password" placeholder="Confirm Password" class="form-control" />
<br>
<button type="submit" name="register" class="btn">REGISTER</button>

</div>
</div>

</fieldset>
  
</form>  

</div>



<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>