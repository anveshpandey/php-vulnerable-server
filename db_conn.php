<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name= "test_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
    echo "Connected Failed";
}

?>