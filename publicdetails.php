<?php 

session_start();
$db = mysqli_connect('localhost','root','','work') or die("could not connect to database");


// check get request if param and select event
if (isset($_GET['eventid'])) {
	
	$id= mysqli_real_escape_string($db, $_GET['eventid']);

	$query= "SELECT * FROM events WHERE eventid= $id";
	$result= mysqli_query($db, $query);

	$event= mysqli_fetch_assoc($result);

	mysqli_free_result($result);
	mysqli_close($db);

}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
     <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
    <div style="text-align: left;"><a href="home.php">HOME</a></div>
    <div style="margin-top: 80px;  margin-left: 30%; text-align: center; background-color: #b6b1b1; width: 40%; color: #4d3137; padding-bottom: 3rem; padding-top: 1rem; font-size: 30px; border-radius: 5px;" >
    	<?php if($event): ?>
    		<h1><?php echo htmlspecialchars($event['eventname']);  ?></h1>
    		<p><?php echo date($event['eventdate']); ?></p>
    		<ul style="list-style: none; text-align: center; padding-right: 8%; align-items: center;">
            <?php foreach (explode(',', $event['eventtype']) as $type) { ?>
            <li><?php echo htmlspecialchars($type) ?></li>
            <?php } ?>   
            </ul>
    		<p>Date created: <?php echo date($event['created_at']); ?></p>

    		<!--delete event-->
    	<form action="details.php" method="post">
    		<a><input " type="hidden" name="id_to_Apply" value="<?php echo $event['eventid']?>">
    		<a style="color:#4d3137; background-color: #928c8d; padding: 15px; text-decoration: none; margin-bottom: 50px; font-size: 16px; border-radius: 10px; " href="application.php?eventid=<?php echo $event['eventid']?>">Apply</a>
    		</a>
        </form>
    	<?php else: ?>
    		<h2>Not an existing event</h2>
        <?php endif;?>
    </div>
    <?php include('footer.php') ?>
 </body>
 </html>