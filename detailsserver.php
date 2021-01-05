<?php 

	session_start();
	$db = mysqli_connect('localhost','root','','work') or die("could not connect to database");

	if (isset($_POST['delete'])) {
		$id_to_delete= mysqli_real_escape_string($db, $_POST['id_to_delete']);
		$query= "DELETE FROM events WHERE eventid = $id_to_delete";

		if (mysqli_query($db, $query)) {
			//success
			header('Location: adminhome.php');
		}{
	        //failure
	        echo "query error: " . mysqli_error($db);
		}
	}

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