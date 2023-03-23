<?php session_start();?>
<?php require_once 'config.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href=" style.css">

</head>
<body>
	<div class="main">  	
	<input type="checkbox" id="chk" aria-hidden="true">
    <?php if(isset($_GET['error'])) { ?>
            <p class="error"> <?php  $_GET["error"]; ?></p>
        <?php } ?> 
        <?php $token = md5(uniqid(rand(),true)); ?>
        <?php $_SESSION['csrf_token'] = $token; ?>

        
    <form action="login.php" method="post">
    <label for="chk" aria-hidden="true">Sign In</label>
        <input type="hidden" name="csrf_token" value="<?php echo $token;?>">
        <input type="text" name="email" placeholder="Email ID" required=""><br>
        <input type="password" name="password" placeholder="Password" required=""><br>
        <button type="submit">Login</button><br>
        <input type="button" onclick="window.location.href='signup.php';"value="New User Please Sign Up"/>
    </form>
    </div>
  </div>
</body>
</head>        
