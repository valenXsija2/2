<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 <?php if (isset($_GET['success'])) { ?>
     		<p class="success"><?php echo $_GET['success']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="Username" placeholder="UserName"><br>

     	<label>Password</label>
     	<input type="Password" name="Password" placeholder="Password"><br>

     	<button type="submit">Login</button>
        <a href="signup.php" class="ca">Create account</a>
     </form>
</body>
</html>