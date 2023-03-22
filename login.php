<?php
session_start();
include "db_conn.php";
include "setcookies.php";
require_once 'config.php';

if(isset($_POST['email'])  && isset($_POST['password'])) {

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;        
}
    


$email = validate($_POST['email']);
$pass  = validate($_POST['password']);

if(empty($email)) {
    header("Location:index.php?error=Email required");
    exit();
}
else if(empty($pass)) {
    header("Location:index.php?error=Password required");
    exit();

}

$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";

$result= mysqli_query($conn, $sql);  

if(mysqli_num_rows($result)===1) {
            $row=mysqli_fetch_assoc($result);
        // if($row['user_name']===$uname && $row['password']===$pass) {
            echo "Logged In!";
            print_r($row);
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['email']= $row['email'];
            $_SESSION['id']=$row['id'];

            header("Location: home.php");
            session_regenerate_id(true);
            exit();
        // }
          
}
else {
    header("Location:index.php?error=Incorrect Username or Password");
    exit();
}
}
?>
