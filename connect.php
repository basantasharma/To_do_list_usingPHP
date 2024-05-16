<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "todo_app";

$conn = mysqli_connect($serverName, $username, $password, $dbname);
if(!$conn)
{
    echo 'not connected to db';
}




?>