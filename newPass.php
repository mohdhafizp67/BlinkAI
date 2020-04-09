
<?php     session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title>Succesful Update</title>
  </head>
  <body  style="background-color: #ADD8E6;">

    <?php
// do update in database
   $pass = $_POST['password'];
      include ('server.php') ;
    $queryUpdate = "UPDATE `users` SET `password`='".$pass."' WHERE `username` = '".$_SESSION['username']."' ";

    $resultUpdate = mysqli_query($db,$queryUpdate);

	   if(!$resultUpdate)
	   {
		die ("invalid query " . mysqli_error($db));
	 }
	  else 
		    header('location: profile.php');
    ?>


  </body>
</html>
