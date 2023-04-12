<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
    if(isset($_SESSION['id'])){
        include "connect.php";
        $postid = $_POST['postid'];
        $userid = $_SESSION['id'];
        $sql = "SELECT id FROM todo WHERE userID = '$userid' AND id = '$postid'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $deletepostid = $row['id'];
            $sql = "DELETE FROM todo WHERE id = '$deletepostid'";
            $result = mysqli_query($conn, $sql);
            if($result != mysqli_error($conn)){
                header("Location: http://localhost/");
                echo "Data deleted successfully";
                exit();
            }
            else
            {
                header("Location: http://localhost/");
                echo "something went wrong";
                exit();
            }

        }


    }
}
else
{
    header("Location: http://localhost/");
}



?>