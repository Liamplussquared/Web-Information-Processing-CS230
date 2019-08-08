<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

//connect to MySQL server
$con = mysqli_connect('localhost','root','','quiz');

if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

//connect to database
mysqli_select_db($con, "quizresults");

//get username and password from query
$user = $_GET['q'];
$pass = $_GET['p'];
$score = $_GET['r'];

mysqli_select_db($con,"quizresults");

$sql= "SELECT * FROM quizresults WHERE Username = '". $user. "'";
//$sql= "SELECT * FROM quizresults";
$result = mysqli_query($con,$sql);

//if no rows returned, want to enter data into database and create user!!!!!! woohooooohHOOooHOoo
if (mysqli_num_rows($result) == 0)  {
	echo "New user created!";
	$sql = "INSERT INTO quizresults (Username, Password, Result) VALUES ('$user', '$pass', '$score')";
	$result = mysqli_query($con, $sql);
}
	
else {
	//username already exists!
	echo "You fool!  Username already exists.";

}

mysqli_close($con);
?>
</body>
</html>