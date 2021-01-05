<?php include('adminserver.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div style="text-align: left; padding: 20px;"><a href="adminhome.php">HOME</a></div>
    <form action="addevent.php" method="post">
    	<h1 style="text-align: center;">ADD NEW EVENT</h1>
        <div>
            <input class="reg" type="text" name="eventname" placeholder="name of event">
        </div>
        <div>
            <input style="height: 3rem; width: 20%; margin-left: 40%;" type="date" name="eventdate" >
        </div>

        <div class="types" style="width: 22%; border-color: #4d3137; margin-left: 40%; margin-bottom: 2rem;">
          <h4> Type of event</h4>

	        <a>
	            <label for="eventtype" >Meet up</label>
	            <input type="checkbox" name="eventtype[]" value="Meet up">
	        </a>
	        <a>
	            <label for="eventtype" >Leap</label>
	            <input type="checkbox" name="eventtype[]" value="Leap">
	        </a>
	        <a>
	            <label for="eventtype">Recruiting Mission</label>
	            <input type="checkbox" name="eventtype[]" value="Recruiting Mission">
	        </a>
	        <a>
	            <label for="eventtype">Hackathon</label>
	            <input type="checkbox" name="eventtype[]" value="Hackathon">
	        </a>
	        <a>
	            <label for="eventtype">Premium-only Webinar</label>
	            <input type="checkbox" name="eventtype[]" value="Premium-only Webinar">
	        </a>
	        <a>
	            <label for="eventtype">Open Webinar</label>
	            <input type="checkbox" name="eventtype[]" value="Open Webinar">
	        </a>
        </div>
        <div>
            <button style="width: 20%; height: 3rem; margin-left: 40%;" name="submit" value="submit">submit</button>
        </div>
    </form>
    <?php include('footer.php') ?>
</body>
</html>