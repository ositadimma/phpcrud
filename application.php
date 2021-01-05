<?php include('applicationserver.php') ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<div style="text-align: left;"><a href="adminhome.php">HOME</a></div>
    <form action="application.php?eventid=<?php echo $event['eventid']?>" method="post">
    	<h1 style="text-align: center;">
    		Event Application
    	</h1>
 		
 		<div>

 			<label for="firstname"></label>
 			<input class="reg" type="text" name="firstname" placeholder="firstname" required>

 		</div>

 		<div>

 			<label for="lastname"></label>
 			<input class="reg" type="text" name="lastname" placeholder="lastname" required >

 		</div>

 		<div>

 			<label for="email"></label>
 			<input class="reg" type="email" name="email" placeholder="email" required>

 			<input class="reg" type="hidden" name="eventname" value="<?php echo $event['eventname']?>">

 		</div>
 		<div>
 			<input style="width: 20%; height: 3rem; margin-left: 40%; margin-top: 10px;"  type="submit" name="submit" value="Apply">
 		</div>
 		<?php include('footer.php') ?>
 </body>
 </html>