<?php 

session_start();

//initializing variables

$eventname = '';
$eventdate = '';
$eventtype = '';


$errors = array();

//connect to db

$db = mysqli_connect('localhost','root','','work') or die("could not connect to database");

//Register users

if (isset($_GET['eventid'])) {
        
        $eventid= mysqli_real_escape_string($db, $_GET['eventid']);

        $sql= "SELECT * FROM events WHERE eventid= '$eventid'";
        $result= mysqli_query($db, $sql);
        
        $event= mysqli_fetch_assoc($result);
}

$eventname = @mysqli_real_escape_string($db, $_POST['eventname']);
$inputdate = @mysqli_real_escape_string($db,$_POST['eventdate']);
$eventdate= date("Y-m-d", strtotime($inputdate));
$eventid= @mysqli_real_escape_string($db, $_POST['eventid']);
$updatetime= date('Y-m-d');

if (isset($_POST['eventtype'])) {

  $types= $_POST['eventtype'];
  $eventtype= implode(',', $types);

}
if (isset($_POST['submit'])) {
  if (empty($eventname) && empty($eventtype) && empty($inputdate) ) {
       array_push($errors, 'you must fill in at least one field');
     }    
}


if (count($errors) == 0) {
    if (isset($_POST['submit'])) {
          if (!empty($eventname)) {
          $query= "UPDATE events SET eventname='$eventname' WHERE eventid='$eventid'";
          mysqli_query($db,$query);
           } 
          if (!empty($inputdate)) {
            $query= "UPDATE events SET eventdate='$eventdate' WHERE eventid='$eventid'";
            mysqli_query($db,$query);
          }

          if (!empty($eventtype)) {
            $query= "UPDATE events SET eventtype='$eventtype' WHERE eventid='$eventid'";
            mysqli_query($db,$query);
          }

          $query= "UPDATE events SET updated_at='$updatetime' WHERE eventid='$eventid'";
          mysqli_query($db,$query);
          $_SESSION['eventname']= 'eventname';
          $_SESSION['success']= 'Event added';

          echo "event updated";
      }
}else{
  echo "you must fill in at least one field";
}
//form validation

 
