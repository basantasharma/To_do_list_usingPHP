<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo
    </title>
</head>
<body>
<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
if(isset($_SESSION['email'])){
    include "connect.php";
    $id = $_SESSION['id'];
    $sql = "Select value FROM todo WHERE userID = '$id' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    foreach ($row as $data )
    {
        echo $data."<br>";
    }
    echo "<a href='/logout.php'>logout</a>";
}
else{
    echo "<a href='/login.html'>login</a><br>";
    echo "<a href='/register.php'>register</a>";
}

?>


</body>
</html>

