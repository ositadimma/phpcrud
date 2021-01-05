<?php include('adminhomeserver.php') ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<div class="container">
        <div style="text-align: right; padding: 20px"><a href="addevent.php">ADD EVENT</a></div>
        <?php if (isset($_SESSION['success'])) : ?>
          <div>
            <h3>
                <?php 
                  echo $_SESSION['success'];
                  unset($_SESSION['success']);
                 ?>
            </h3>
          </div>

           <?php endif ?>
           

           <!--if user logs in print information about user-->

           <?php if (isset($_SESSION['username'])): ?>

           <h3>welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>

           <a style="text-decoration: none;" href="adminhome.php?logout='1'">Log out</a>

        <?php endif ?>
        <div>
            <form action="adminhome.php" method="POST">
                <input type="text" name="search" class="search" placeholder="name or type of event"><a><input class="submit" type="submit" name="submit" value="search"></a>
            </form>
        </div>
    <section class="column">
 		<div class="row">
 
 			<?php foreach ($events as $event ) { ?>

             <div class="card" style="margin: 20px;  margin-left: 30%; text-align: center; background-color: #b6b1b1; width: 40%; color: #4d3137;">
             	<div class="card-content">
             		<h2 style="padding-top: 1rem"><?php echo htmlspecialchars($event['eventname']); ?></h2>
             		<ul style="list-style: none; text-align: center; padding-right: 8%; align-items: center;">
                    <?php foreach (explode(',', $event['eventtype']) as $type) { ?>
                    <li><?php echo htmlspecialchars($type) ?></li>
                    <?php } ?>   
                    </ul>
             		<div class="col"><?php echo htmlspecialchars($event['eventdate']); ?></div>
             	</div>
                <div class="card-action" style="padding-bottom: 0.5rem; text-align: right; padding-right: 2%; ">
                	<a style="color:#4d3137;" href="details.php?eventid=<?php echo $event['eventid']?>">more info</a>
                </div>

             </div>


 			<?php } ?>
 		
 		</div>
    </section>
    <?php include('footer.php') ?>
 	</div>
 </body>
 </html>