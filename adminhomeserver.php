<?php 

	session_start();


	//connect to database
	$db = mysqli_connect('localhost','root','','work') or die("could not connect to database");

	$query = "SELECT * FROM events ORDER BY eventdate ";

	//query database
	if (isset($_POST['submit'])) {
	    if (isset($_POST['search'])) {
	        $name= @mysqli_real_escape_string($db, htmlspecialchars($_POST['search']));
	        $query = "SELECT * FROM events WHERE eventname LIKE '%$name%' OR eventtype LIKE '%$name%' ORDER BY eventdate ";
	        $result= @mysqli_query($db, $query);
	        $events= mysqli_fetch_all($result, MYSQLI_ASSOC);

	    }
	}   


	$result= @mysqli_query($db, $query);
	$events= mysqli_fetch_all($result, MYSQLI_ASSOC);



	if (isset($_GET['logout'])) {

	  session_destroy();
	  isset($_SESSION['username']);
	  header("location: login.php");
	}


?>