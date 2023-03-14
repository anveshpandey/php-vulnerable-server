<?php
session_start();
include "db_conn.php";
include "setcookies.php";

if(isset($_POST['txt']) && isset($_POST['pswd']) && isset($_POST['email'])) {
    
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;        
    }
$txt   =  validate($_POST['txt']);
$email =  validate($_POST['email']);
$pswd  =  validate($_POST['pswd']);
    


if(empty($txt)) {
    header("Location:index.php?error=User name required");
    exit();
}

else if(empty($pswd)) {
    header("Location:index.php?error=Password required");
    exit();
}

else if(empty($email)){
    header("Location:index.php?error=Email required");
    exit();

}
else {
    $rsql = "INSERT INTO users(id,user_name,password,email) VALUES ('','$txt','$pswd','$email')";
    mysqli_query($conn, $rsql); 
    header("Location:index.php?success=User created");
    exit();

}
}
