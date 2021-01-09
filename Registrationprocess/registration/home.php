<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
<title>User registrtion system using php and mysql</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
  <h2>Home Page</h2>
</div>
<div class="content">
  <?php if(isset($_SESSION['success'])):?>
    <div class="error success">
      <h3>
        <?php
         echo $_SESSION['success'];
         unset($_SESSION['success']);
         ?>
         </h3>
  </div>
  <?php endif ?>
  <?php if(isset($_SESSION["username"])):?>
    <p>Welcome<i><?php echo $_SESSION['username'];?></i></p>
    <p><a href=register.php style="color: red;">LogOut</a></p>
   
    <?php endif ?>
  </div>

</body>
</html>