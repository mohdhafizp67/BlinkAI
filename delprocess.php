<!DOCTYPE html>
<html>
<head>
<title> Delte Users </title>
</head>

<body>
<h3> USERS DELETED </h3>

<?php
$id =$_POST["id"];

$host="localhost";
$userid = "root";
$password ="";
$database ="register";

$link = mysqli_connect($host,$userid,$password,$database);

if (!$link)
{
	die ("Could not connect : " .mysqli_connect_error($link));
}
else
{
	$queryInsert  = "DELETE FROM USERS WHERE id = '".$id."' ";
	$resultInsert = mysqli_query($link,$queryInsert);
	if(!$resultInsert)
	{
		die ("Problem Query : ".mysqli_error($link));
	}
	else
  header('location: delete.php');
}

?>

</body>
</html>
