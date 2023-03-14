<?php
session_start();
include "setcookies.php";


if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Our Project</title>
        <link rel="stylesheet" tpye="test/css" href="home.css">      
    </head>
    <body>       
        <a href="user_profile.php">User Profile</a>
        <a href="file_upload.php">File Upload</a>
        <a href="logout.php">Logout</a>
        <h1>Hello <?php echo $_SESSION['user_name'];?></h1>
        <form action="updateuserinfo.php" method="post">
        <label for="chk" aria-hidden="true">Profile Update</label><br>
            <input type="text" name="udname" value ="<?php echo $_SESSION['user_name']; ?>"> <br>
            <input type="text" name="udemail" value ="<?php echo $_SESSION['email'];  ?>"><br>
            <!-- <input type="password" name="password" placeholder="Password" required=""><br> -->
            <button type="submit">Update

            </button><br>
    </form>
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