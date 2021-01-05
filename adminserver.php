<?php 

session_start();

//initializing variables

$eventname = '';
$eventdate = '';
$types = '';
$eventtype = '';

$errors = array();

//connect to db

$db = mysqli_connect('localhost','root','','work') or die("could not connect to database");

//populate variables

$eventname = @mysqli_real_escape_string($db, $_POST['eventname']);
$inputdate = @mysqli_real_escape_string($db,$_POST['eventdate']);
$eventdate= date("Y-m-d", strtotime($inputdate));
  
if (isset($_POST['eventtype'])) {

  $types= $_POST['eventtype'];
  $eventtype= implode(',', $types);

}



//error handling
if (isset($_POST['submit'])) {

  if (empty($eventname)) {array_push($errors, 'eventname is required');}
  if (empty($eventdate)) {array_push($errors, 'eventdate is required');}
  if (empty($eventtype)) {array_push($errors, 'eventtype is required');}

 
}


//register event
if (isset($_POST['submit'])) {
	$query= "INSERT INTO events (eventname, eventdate, eventtype) VALUES ('$eventname', '$eventdate', '$eventtype')";
	mysqli_query($db,$query);
   
	echo "event added";
	$_SESSION['eventname']= 'eventname';
	$_SESSION['success']= 'Event added';


};