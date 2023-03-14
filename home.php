<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" tpye="test/css" href="home.css">     
    </head>
    <body>       
        <a href="user_profile.php">User Profile</a>
        <a href="file_upload.php">Resume Upload</a>
        <a href="logout.php">Logout</a>
        <h1>Hello <?php echo $_SESSION['user_name'];?></h1>
    </div>
    </body>
    </html>

    <?php
}
else {
    header("Location: index.php");
    exit();
}
?>