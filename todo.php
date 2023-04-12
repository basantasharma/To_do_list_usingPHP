<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo
    </title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="form.css">
</head>
<body>
<?php
    @include('navbar.php');
    ?>
    <?php
    if(session_status() === PHP_SESSION_NONE){
      session_start();
    }
    if(!isset($_SESSION['email'])){
      header("Location: http://localhost/login.php");
    }
    ?>


    <form class="login-form" id="login-form" action="savetodo.php" method="post">
        <div class="container">
            <h1>Add Todo</h1>
            <hr>
        
            <label for="todo"><b>Todo</b></label><br>
            <input type="text" placeholder="Enter todo" name="todo" id="todo" required><br>
            <hr>
            <button type="submit" class="loginbtn">Save</button><br>
        </div>
    </form>
</body>
</html>