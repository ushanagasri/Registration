<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
<title>User registrtion system using php and mysql</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
  <h2>Login</h2>
</div>
<form method="post" action="login.php">
<?php include('errors.php');?>
<div class="input-group">
<label>Username</label>
<input type="text" name="username">
</div>
<div class="input-group">
<label>Password</label>
<input type="password" name="password">
</div>

<div class="input-group">
<button type="submit" name="login" class="btn">Login</button>
</div>
<p>Don't have an account?<a href="register.php">Sign Up</p>
</form>

</body>
</html>