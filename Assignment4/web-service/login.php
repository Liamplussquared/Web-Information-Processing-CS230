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

//$sql= "SELECT * FROM quizresults WHERE (Username = '". $user. "') AND (Password = '". $pass. "')";
$sql= "SELECT * FROM quizresults WHERE Username = '". $user. "'";
$result = mysqli_query($con,$sql);


//if no rows returned, want to enter data into database and create user!!!!!! woohooooohHOOooHOoo
if (mysqli_num_rows($result) == 0)  {
	echo "No user found! Username/password incorrect!";
	
}
	
else {
	//now to echo result... 
	//should check password here, I'll do it if I have time!
	
	//should also update score here... add another quiz/score thingy
	$sql = "UPDATE quizresults SET Result = '$score' WHERE '$user' = Username";
	mysqli_query($con, $sql);
	
	
	echo "<br>" ;
	echo "Note: you have to press login twice to update score. Don't ask me why, I don't know";
	echo "<br> <br>";
	
	$row = mysqli_fetch_array($result);
	if (strcasecmp(trim($pass), trim($row['Password'])) == 0) {
		echo "<table>
		<tr>
		<th> Username </th>
		<th> Score </th>
		</tr>";
		
		//while($row = mysqli_fetch_array($result)) {
			 echo "<tr>";
			echo  "<td>" . $row['Username'] . "</td>";
			echo  "<td>" . $row['Result'] . "</td>";
			echo "</tr>"; 
			
			/* echo var_dump($pass);
			echo "<br>";
			echo var_dump($row['Password']);
			echo "<br>";
			if(strcasecmp(trim($pass), trim($row['Password'])) == 0) echo "match"; */
		//}
		
		echo "</table>";
	} 
	else {
		echo "Wrong password fool!";
	}
	
}

mysqli_close($con);
?>
</body>
</html>