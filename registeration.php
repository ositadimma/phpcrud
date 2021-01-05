<?php include('server.php') ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

 <div class="container center">
 	
 	<div class="header" style="text-align: center">
 		<h1>Admin Signup </h1>
 	</div>
 	
 	<form action="registeration.php" method="post">

 		<?php include('errors.php') ?>
 		
 		<div>

 			<label for="username"></label>
 			<input class="reg" type="text" name="username" required placeholder="Username">

 		</div>

 		<div>

 			<label for="email"></label>
 			<input class="reg" type="email" name="email" required placeholder="Email">

 		</div>

 		<div>

 			<label for="password"></label>
 			<input class="reg" type="password" name="password_1" required placeholder="Password">

 		</div>

 		<div>

 			<label for="password"></label>
 			<input class="reg" type="password" name="password_2" required placeholder="Confirm Password">

 		</div>

 		<button id="regbutton" style="width: 20%; height: 3rem; margin-left: 40%; margin-top: 10px;" type="submit" name="submit">Submit</button>

 		<p style="text-align: center;">Already a user? <a href="login.php">Log in</a></p>

 	</form>
    <?php include('footer.php') ?>

 </div>

</body>
</html>