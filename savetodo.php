<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Code for POST request
    include "connect.php"; 
    $todo = $_POST['todo'];
    if($todo == ""){
        echo "<h2>Please fill out the todo field</h2>";
        header("Location: http://localhost/todo.php");
        exit();
    }
    else{
        session_start();
        if(isset($_SESSION['email'])){
            $email = $_SESSION['email'];
            $userid = "SELECT id FROM user_details where email = '$email' ";
            $resultid = mysqli_query($conn, $userid);
            $row = mysqli_fetch_assoc($resultid);
            $id  = $row['id'];
            //var_dump($row['id']);
            $sql = "INSERT INTO todo VALUES ('','$id','$todo')";
            $saveTodo = mysqli_query($conn, $sql);
            header("Location: http://localhost/");
            echo "todo inserted";
            exit();
        }
        else{
            header("Location: http://localhost/login.php");
            echo "<h2>please login first to save todo<br></h2>";
            exit();
        }

    }

} 
else {
    // Code for GET request
    header("Location: http://localhost/todo.php");
}

?>