<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="navbar.css">
    <title>register</title>
</head>
<body>
<?php
    @include('navbar.php');
    ?>
    <div class="left"></div>
    <div class="center">
        <form action="startRegister.php" method="POST">
            <div class="container">
              <h1>Register</h1>
              <p>Please fill in this form to create an account.</p>
              <hr>
              <label for="username"><b>UserName</b></label><br>
              <input type="text" placeholder="Enter UserName" name="username" id="username" required><br>
              <label for="email"><b>Email</b></label><br>
              <input type="text" placeholder="Enter Email" name="email" id="email" required><br>
          
              <label for="password"><b>Password</b></label><br>
              <input type="password" placeholder="Enter Password" name="password" id="password" required><br>
          
              <label for="cpassword"><b>Repeat Password</b></label><br>
              <input type="password" placeholder="Repeat Password" name="cpassword" id="cpassword" required><br>
              <hr>
              <button type="submit" class="registerbtn">Register</button><br>
            </div>
          
            <div class="container signin">
              <p>Already have an account? <a href="login.html">Sign in</a>.</p>
            </div>
          </form>

    </div>
    <div class="right"></div>
    
</body>
</html>