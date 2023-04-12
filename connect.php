<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "validation";

$conn = mysqli_connect($serverName, $username, $password, $dbname);
if(!$conn)
{
    echo 'not connected to db';
}




?>