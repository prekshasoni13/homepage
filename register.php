<?php include('server.php') ?>
  	<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.popup-box p {
    font-size: 1em;
    margin-bottom: 10px;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    min-height: 100vh; 
    overflow-x: hidden;
}
.image{
    justify-content: center;
    align-items: center;
}
.popup-screen{
    z-index: 999999;
    position: fixed;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.popup-box{
    position: relative;
    background: #DDD0C8;
    backdrop-filter: blur(10px);
    max-width: 500px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: 200px;
    padding: 50px 40px;
    border-radius: 20px;
    box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
    border: 2px solid black;
}
.popup-box h2{
    font-size: 2.1;
    font-weight: 800;
    margin-bottom: 20px;
}
.popup-box p{
    font-size: 1em;
    margin-bottom: 30px;
}
.popup-box .btn{
    color: #fff;
    background-color: #C9AE5D;
    font-size: 1.1em;
    font-weight: 500;
    text-decoration: none;
    text-transform: uppercase;
    padding: 7px 27px;
    border-radius: 3px;
    margin-top: 50px;
}
.close-btn{
    position: absolute;
    font-size: 1em;
    top: 0;
    right: 0;
    margin: 15px;
    cursor: pointer;
    opacity: 0.5;
}
.close-btn:hover{
    opacity: 1;
}
.input-group{
    margin-top: 10px;
}
</style>
</head>
<body>
<form method="post" action="register.php">

    <div class="popup-screen">
        <div class="popup-box">
            <i class="fas fa-time close-btn"></i>
            
            <h2>Register form</h2>
            <?php include('errors.php'); ?>
            <label style="margin-left: -330px;">Username</label>
            <input style="padding: 8px; width: 400px;" type="text" name="username">
            <label style="margin-left: -350px;">Email</label>
  	  <input style="padding: 8px; width: 400px;" type="email" name="email" >
        <label style="margin-left: -330px;">Password</label>
  	  <input style="padding: 8px; width: 400px;" type="password" name="password_1">
        <label style="margin-left: -280px;">Confirm password</label>
  	  <input style="padding: 8px; width: 400px;" type="password" name="password_2">
        <button type="submit" class="btn" name="reg_user">Register</button>
		<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>    
	</div>
</div>
    <div class="image">
        <img src="Screenshot (24).png" alt="">
    </div></form>
</body>
</html>