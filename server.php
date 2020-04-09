<?php

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'register');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);



  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  /**if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }**/

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password =($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password, phonenumber, gender, status)
  			  VALUES('$username', '$email', '$password','$phonenumber','$gender', 'user')";
  	if(mysqli_query($db, $query))
	{
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: login.php');
	}
	else
		header('location: register.php');
  }
}
//end register

// ...
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username =  $_POST['username'];
  $password =  $_POST['password'];



if($username === 'admin' && $password === 'admin'){
          $_SESSION['login'] = true; header('LOCATION:login.php');
        }
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
		  $query="SELECT *FROM users where username = '".$username."' ";
		  $check=mysqli_query($db,$query);
		  if(mysqli_num_rows($check) == 0)
		  {
			  echo "username does not exist";
		  }
		 if($username === 'admin' && $password === 'admin')
		  {
					session_start();
					$_SESSION['username']=$username;
					$_SESSION['password']=$password;
					header('location:index.php');
		  }
		  else
			{
				$row = mysqli_fetch_array($check,MYSQLI_BOTH) ;
				if($row["password"] == $password)
				{
					session_start();
					$_SESSION['username']=$username;
					$_SESSION['password']=$password;
					$_SESSION['email']=$row['email'];
					$_SESSION['phonenumber']=$row['phonenumber'];
					$_SESSION['gender']=$row['gender'];
					header('location:index.php');
				}
				else
				{
					header('location:login.php');
				}
			}
			mysqli_close($db);
	}



?>
