<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index
    </title>
    <link rel="stylesheet" href="navbar.css">
</head>
<body>

<?php
    @include('navbar.php');
    ?>
    <h2>You can see your to do list here.</h2>


<div style= 'display:flex; justify-content:space-between;'>
    <div>
    </div>
    <div>
        <ol type="1" style='border: 3px solid green;'>
            <?php
                if(session_status() === PHP_SESSION_NONE){
                    session_start();
                }
                if(isset($_SESSION['email'])){
                    include "connect.php";
                    $id = $_SESSION['id'];
                    $sql = "Select id, value FROM todo WHERE userID = '$id' ";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Code to display each row data
                        if(!empty($row))
                        {
                            // foreach ($row as $data )
                            // {
                                echo "<li style='color: green; margin:10px; padding:0px 10px;'>";
                                echo "<div>";
                                echo $row['value']."<form action='deletetodo.php' method='POST'>
                                <input type='number' name='postid' placeholder='id' value"."=".$row['id']." hidden>
                                <input type='submit' value='Delete' style='color:white; background:red; padding:4px; border:0px; border-radius:5px;'></input>
                            </form>";
                                // <button type='submit'>Delete</button>
                                //echo $row['value']."<a style='padding-left:60px; color:red;' href='/deletetodo.php/?id".'='.$row['id']."' >Delete</a>";
                                echo "</div>";
                                echo "</li>";
                            // }
                        }    
                    }
                    // $row = mysqli_fetch_assoc($result);        
                }
                else{
                    echo "<h4>login to see your to do list here.</h4>" ;
                }
            ?>
        </ol>
</div>
<div>
</div>




</body>

</html>