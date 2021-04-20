<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
  	<h2><p>Welcome back to Amapiano Music✨<p></h2>
  </div>
	 
  <form method="post" action="login.php">
	  <h2>Login Here</h2>
	  <br>
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required>
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" required>
  	</div>
	  <br>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		<br>Not yet a member? <a href= "registrationpage.php" >Sign up</a>
  	</p>
  </form>
</body>
</html>