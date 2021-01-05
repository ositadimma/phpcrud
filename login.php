<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

 <div class="container">
 	
 	<div class="header" style="text-align: center;">
 		<h1>Log in</h1>
 	</div>
 	
 	<form action="login.php" method="post">
 		
 		<div>

 			<label for="username"></label>
 			<input class="reg" type="text" name="username" placeholder="username" required>

 		</div>

 		<div>

 			<label for="password"></label>
 			<input class="reg" type="password" name="password" placeholder="password" required>

 		</div>

 		<input type="submit" style="width: 20.2%; height: 3rem; margin-left: 40%; margin-top: 10px; border-radius: 5px;"  name="login_user" value="log in">

 		<p style="text-align: center;">Not a user? <a href="registeration.php">Register here</a></p>


 	</form>

 <?php include('footer.php') ?>
 </div>

</body>
</html>