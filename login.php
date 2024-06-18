<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
  <style>
    .popup-box{
        background-color:#DDD0C8;
    }
  </style>
</head>
	 
  <form method="post" action="login.php">
  	
<body>
    <div class="popup-screen">
        <div class="popup-box">
			
            <h2>Login Form</h2>
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label>Username</label>
                <input style="padding: 8px; width: 250px;" type="text" name="username" >
            </div>
            <div class="input-group">
                <label>Password</label>
                <input  style="padding: 8px; width: 250px;" type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
            <p style="margin-top: 50px;">
                Not yet a member? <a href="register.php">Sign up</a>
            </p>
 
        </div>
    </div>
    <div class="image">
        <img src="Screenshot (24).png" alt="">
    </div>
  </form>
</body>
</html>