<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="navbar.css">
    <title>Login</title>
</head>
<body>
<?php
    @include('navbar.php');
    ?>
    <?php
    if(session_status() === PHP_SESSION_NONE){
      session_start();
    }
    if(isset($_SESSION['email'])){
      header("Location: http://localhost/");
    }
    ?>
    <div class="left"></div>
    <div class="center">
        <form class="login-form" id="login-form" action="startLogin.php" method="post">
            <div class="container">
              <h1>Login</h1>
              <hr>
          
              <label for="email"><b>Email</b></label><br>
              <input type="text" placeholder="Enter Email" name="email" id="email" required><br>
          
              <label for="password"><b>Password</b></label><br>
              <input type="password" placeholder="Enter Password" name="password" id="password" required><br>
              <hr>
              <button type="submit" class="loginbtn">login</button><br>
              <p>Do not have one ?<a href="register.php">register</a></p>
            </div>
          </form>

    </div>
    <div class="right"></div>
    
</body>
</html>