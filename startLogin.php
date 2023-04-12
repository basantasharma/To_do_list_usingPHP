<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    include('connect.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT password, id FROM user_details WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // User found, check password
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];
        if(password_verify($password, $hashedPassword)){
            if(session_status() === PHP_SESSION_NONE){
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['id'] = $row['id'];
            }
            header("Location: http://localhost/");
            exit();
            
        }
        else{
            echo "wrong credencials<br>";
            header("Location: http://localhost/login.php");
            exit();
        }
    }
} 
else 
{
    header("Location: http://localhost/login.php");
    exit();
}


?>