<?php include('homeserver.php') ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<div class="container">
 		<div>
 		<form method="post" action="home.php">
	    <input type="text" name="search" class="search" placeholder="name or type of event"><a><input class="submit" type="submit" name="submit" value="search"></a>
	    </form>
	    </div>
 		<div class="row">

 			<?php foreach ($events as $event ) { ?>

             <div class="card" style="margin: 20px;  margin-left: 30%; text-align: center; background-color: #b6b1b1; width: 40%; color: #4d3137; padding-top: 1rem;">
             	<div class="card-content" style="margin-top: 2rem;">
             		<h2><?php echo htmlspecialchars($event['eventname']); ?></h2>
             		<ul style="list-style: none; text-align: center; padding-right: 8%; align-items: center;">
                    <?php foreach (explode(',', $event['eventtype']) as $type) { ?>
                    <li><?php echo htmlspecialchars($type) ?></li>
                    <?php } ?>   
                    </ul>
                    <div><?php echo htmlspecialchars($event['eventdate']); ?></div>
             	</div>
                <div class="card-action" style="padding-bottom: 0.5rem; text-align: right; padding-right: 2%;">
                	<a style="color:#4d3137;" href="publicdetails.php?eventid=<?php echo $event['eventid']?>">more info</a>
                </div>

             </div>


 			<?php } ?>
 		
 		</div>
 		<?php include('footer.php') ?>
 	</div>
    
 </body>
 </html>