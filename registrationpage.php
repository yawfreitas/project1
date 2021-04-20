<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" href = "style.css">
</head>
<body>
	<div class = "header">
	<h1> Amapiano Music ✨<br></h1>
	<h3>Create an account and listen to Africa's finest tunes.</h3>
	</div>


  <form method="post" action="registrationpage.php" class="content">
  	<?php include('errors.php'); ?>
	  <h2>Sign Up Here<br></h2>
	  <br>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" placeholder="eg. skinnyjay" name="username" value="<?php echo $username; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" placeholder="skinnyjay@yahoo.com" name="email" value="<?php echo $email; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password"  name="password_1" required>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password"  name="password_2" required>
  	</div>
	  <br>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user" ><h4>Register</h4></button>
  	</div>
	  <p>
		  <br>
  		Already a member? <a href="login.php" color = "white">Sign in</a>
  	</p>
  </form>
</body>
</html>