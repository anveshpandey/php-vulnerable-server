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
        <input type="password" id="password" name="password" placeholder="Password" required=""><br>
        <!-- <button type="submit">Login</button><br> -->
       <input type="submit" value="Login" onclick="convertToHash()">
       <input type="button" onclick="window.location.href='signup.php';"value="New User Please Sign Up"/>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
    <script>
      function convertToHash() {
        // Get the input value
        var input = document.getElementById('password').value;
        
        // Convert input to hash
        var hash = CryptoJS.SHA256(input);
        
        // Set the hashed value to the hidden input field
        document.getElementById('password').value = hash.toString();
      }
    </script>
  </div>
</body>
</head>        
