<?php
session_start();
include "db_conn.php";
include "setcookies.php";

if(isset($_POST['udname']) && isset($_POST['udemail'])) {
    //Will be used to sanitize the user input
    // function validate($data) {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;        
    // }


$name =  ($_POST['udname']);
$email = ($_POST['udemail']);

// $pswd  =  ($_POST['pswd']);

$sql = "UPDATE users SET user_name='$name', email='$email' WHERE id='{$_SESSION['id']}'";
if (mysqli_query($conn, $sql)) {
    echo "Profile updated successfully";
} else {
    echo "Error updating profile: " . mysqli_error($conn);
}
}

?>