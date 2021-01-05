<?php 

session_start();

//initializing variables

$firstname = '';
$lastname = '';
$email = '';
$eventname = '';

$errors = array();

//connect to db

$db = mysqli_connect('localhost','root','','work') or die("could not connect to database");

if (isset($_GET['eventid'])) {
		
		$eventid= mysqli_real_escape_string($db, $_GET['eventid']);

		$sql= "SELECT * FROM events WHERE eventid= '$eventid'";
		$result= mysqli_query($db, $sql);
	    
		$event= mysqli_fetch_assoc($result);

}


$firstname = @mysqli_real_escape_string($db, $_POST['firstname']);
$lastname =@mysqli_real_escape_string($db, $_POST['lastname']);
$email = @mysqli_real_escape_string($db, $_POST['email']);
$eventname = @mysqli_real_escape_string($db, $_POST['eventname']);





//form validation
if (isset($_POST['submit'])) {

  if (empty($firstname)) {array_push($errors, "firstname is required");}
  if (empty($lastname)) {array_push($errors, "lastname is required");}
  if (empty($email)) {array_push($errors, 'email is required');}
 
 }


// check db for username existence
$user_check_query = "SELECT * FROM applicant WHERE email= '$email' LIMIT 1";

$results= mysqli_query($db, $user_check_query);
$user= mysqli_fetch_assoc($results);

//error handling
if ($user) {

	if (count($user)>0) { array_push($errors, 'this Email has already been used');}
};



//register user if no error
if (count($errors) == 0) {
 if (isset($_POST['submit'])) {
 
	$query= "INSERT INTO applicant (`firstname`, `lastname`, `email`, `eventname`) VALUES ('$firstname', '$lastname', '$email', '$eventname')";

	mysqli_query($db,$query);
	$_SESSION['firstname']= $firstname;
	$_SESSION['success']= 'Application successful';

    echo "Application successful";
	
  }
};



?>