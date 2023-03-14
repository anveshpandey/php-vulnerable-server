<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<link rel="stylesheet" type="text/css" href=" style.css">

</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
            <?php if(isset($_GET['success'])) { ?>
            <p class="success"> <?php echo $_GET["success"]; ?></p>
            <?php } ?>
            <?php if(isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET["error"]; ?></p>
            <?php } ?>
                <form action="register.php" method="post">
                    
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="txt" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Sign up</button>
				</form>
			</div>
  </div>
</body>
</html>