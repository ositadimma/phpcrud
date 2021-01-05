<?php 

session_start();

//initializing variables

$username = '';
$email = '';
$password= '';

$errors = array();

//connect to db

$db = mysqli_connect('localhost','root','','work') or die("could not connect to database");

//Register users

$username = @mysqli_real_escape_string($db, $_POST['username']);
$email = @mysqli_real_escape_string($db, $_POST['email']);
$password_1 = @mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = @mysqli_real_escape_string($db, $_POST['password_2']);


//form validation
if (isset($_POST['submit'])) {
  if (empty($username)) {array_push($errors, "username is required");}
  if (empty($email)) {array_push($errors, 'email is required');}
  if (empty($password_1)) {array_push($errors, 'password is required');}
  if ($password_1 != $password_2) {array_push($errors, 'passwords do not match');}
 }


// check db for username existence
$user_check_query = "SELECT * FROM user WHERE username = '$username' or email= '$email' LIMIT 1";

$results= mysqli_query($db, $user_check_query);
$user= mysqli_fetch_assoc($results);

//error handling
if (isset($_POST['submit'])) {

 if ($user) {
	if ($user['username'] === $username) { array_push($errors, 'username already exists');}
	if ($user['email'] === $email) { array_push($errors, 'this Email has already been used');}
 };
 }

//register user if no error
if (isset($_POST['submit'])) {
	if (count($errors) == 0) {
		if (isset($_POST['password'])) {
      	$password= password_hash($password, PASSWORD_DEFAULT);
        }

		$query= "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

		mysqli_query($db,$query);
		$_SESSION['username']= $username;
		$_SESSION['success']= 'you are now logged in';
        echo "user registered";


	};
 }



//user log in
 if (isset($_POST['login_user'])) {
	$username = @mysqli_real_escape_string($db, $_POST['username']);
	$password = @mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {array_push($errors, "username is required");}
    if (empty($password)) {array_push($errors, 'password is required');}

    if (count($errors) == 0) {
      if (isset($_POST['password'])) {
      	$password= password_hash($password, PASSWORD_DEFAULT);
      }

     $query="SELECT * FROM user WHERE username = '$username' or password= '$password'";
     $results= mysqli_query($db, $query);

     if (mysqli_num_rows($results)) {
     	$_SESSION['username']= $username;
     	$_SESSION['success']= "Logged in successfully";
     	header('Location: adminhome.php');
     }else{
     	array_push($errors, "wrong username/password combination. please try again");
     }
 	}
 }

?>