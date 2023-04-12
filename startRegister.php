<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include "connect.php";
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if($email == ""){
        echo "email should not be empty";
        header("Location: http://localhost/register.php");
        exit();
    }
    else if($password == ""){
        echo "email should not be empty";
        header("Location: http://localhost/register.php");
        exit();
    }
    else if($username == ""){
        echo "username should not be empty";
        header("Location: http://localhost/register.php");
        exit();
    }
    else if($password != $cpassword){
        echo "password and confirm password must match should not be same";
        header("Location: http://localhost/register.php");
        exit();
    }
    else{
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user_details (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
        $result = mysqli_query($conn, $sql); 
        if($result)
        {
            // Redirect to a different URL
            header("Location: http://localhost/login.php");
            echo "<h2>User registered successfully!</h2>";
            //    include "login.html" ;

            // Exit to prevent further script execution
            exit();
        }
        else
        {
            header("Location: http://localhost/register.php");
            echo "<h2>Something went wrong!</h2>";
            //die(error_get_last());
        }  
    }

} 
else 
{
    echo "get method triggered";
    header("Location: http://localhost/register.php");
    exit();
}


?>