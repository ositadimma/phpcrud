<?php include('detailsserver.php') ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body >
 	<div style="text-align: left;"><a href="adminhome.php">HOME</a></div>
    <div class="container center" style="margin-top: 80px;  margin-left: 30%; text-align: center; background-color: #b6b1b1; width: 40%; color: #4d3137; padding-bottom: 2rem; padding-top: 1rem; font-size: 30px; border-radius: 5px;" >
    	<?php if($event): ?>
    		<form action="details.php" method="post">
            <input type="hidden" name="id_to_delete" value="<?php echo $event['eventid']?>">
    		<input style=" background: #928c8d; height: 3em; margin-left: 80%;" type="submit" name="delete" value="Delete" class="z-depth-0">
            </form>
    		<h1><?php echo htmlspecialchars($event['eventname']);  ?></h1>
    		<p><?php echo date($event['eventdate']); ?></p>
    		<ul style="list-style: none; text-align: center; padding-right: 8%; align-items: center;">
            <?php foreach (explode(',', $event['eventtype']) as $type) { ?>
            <li><?php echo htmlspecialchars($type) ?></li>
            <?php } ?>   
            </ul>
    		<p>Date created: <?php echo date($event['created_at']); ?></p>

    		<!--delete event-->
        <a style="height: 2rem; width: 3rem; background-color: #928c8d; text-decoration: none; color: #4d3137; font-size: 1rem; padding: 10px; border-color: #928c8d; border: 2px; border-radius: 3px;" href="updateevent.php?eventid=<?php echo $event['eventid']?>">
    			Update
    	</a>
    	<?php else: ?>
    		<h2>Not an existing event</h2>
        <?php endif;?>
    </div>
    <?php include('footer.php') ?>
 </body>
 </html>