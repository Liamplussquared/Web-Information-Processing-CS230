<?php
	$method = $_SERVER['REQUEST_METHOD'];
	
	//now to get variables sent in 
	$input = file_get_contents('php://input');
	$vars = explode("&", $input); //split by &
	


	
	//now to connect to table
	$conn = mysqli_connect('localhost', 'root', '', 'assignment5');
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	
	$selectAll = False;
	$anInsert = True; //have posts for updates and the insert, gotta determine what to do 
	
	//right, need to get each variable
	if (sizeof($vars) == 3) {
		$nameequal = explode("=",$vars[0]);
		$name = $nameequal[1];
		$urlequal = explode("=",$vars[1]);
		$url = $urlequal[1];
		$descequal = explode("=",$vars[2]);
		$desc = $descequal[1];
	}
	elseif (sizeof($vars) == 2) {
		//yurty aherne
		
		$anInsert = False;
		
		$var1 = explode("=", $vars[0]);
		$var2 = explode("=", $vars[1]);
		
		//detailed variable names are saving my life 
		$idToUpdate = $var1[1];
		$whatToUpdate = $var2[0];
		$dataToUpdateWith = $var2[1];
	
	}
	elseif (sizeof($vars) == 1) {
		//delete or retrieve? answer lies in id or name!
		if($method != 'DELETE') {
			//get every row or get row(s) based off name/id
			$selectAll = True;
		}
		else {
			$idEqual = explode("=",$vars[0]);
			$theId = $idEqual[1];
		} 
	}

		
	
	//date is YYYY-MM-DD
	//need it for insertion ;)
	$currDate = date('Y-m-d');
	

	
	
	//switch on method
	if ($selectAll == False) {
		switch( $method) {
			case 'GET':
				$sql = "SELECT * FROM 'readinglist'";
			case 'POST':
				if ($anInsert == True) {
					//insert into table
					$sql = "INSERT INTO readinglist (Date, Name, URL, Description) VALUES ('$currDate', '$name', '$url', '$desc')"; 
					$result = mysqli_query($conn, $sql);
					echo $result;
				}
				else {
					//condition on what to update
					if($whatToUpdate == 'Name') {
						$sql = "UPDATE readinglist SET Name = '$dataToUpdateWith' WHERE ID = '$idToUpdate'";
						$result = mysqli_query($conn, $sql);
						echo $result;
					}
					elseif($whatToUpdate == 'URL') {
						$sql = "UPDATE readinglist SET URL = '$dataToUpdateWith' WHERE ID = '$idToUpdate'";
						$result = mysqli_query($conn, $sql);
						echo $result;
					}
					elseif($whatToUpdate == 'Description') {
						$sql = "UPDATE readinglist SET Description = '$dataToUpdateWith' WHERE ID = '$idToUpdate'";
						$result = mysqli_query($conn, $sql);
						echo $result;
					}
				}
			case 'DELETE':
				//yurt
				if ($method == 'DELETE') { //don't ask, for some reason the code inside was being visited by a POST
					$sql = "DELETE FROM readinglist WHERE ID = '$theId'";
					$result = mysqli_query($conn, $sql);
				}
				
			case 'PUT':
				//yurt
		}
	} else {
		if($vars[0]) {
			echo "fanny";
		}
		else{
			$sql = "SELECT * FROM readinglist";
			$result = $conn -> query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				echo "<table>";
				echo "<tr> <th> id </th> <th> name </th> <th> url </th> <th> desc </th> </tr>";
				while($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>";
					echo "" . $row["ID"]. "";
					echo "</td>";
					
					echo "<td>";
					echo "" . $row["Name"]. "";
					echo "</td>";
					
					echo "<td>";
					echo "" . $row["URL"]. "";
					echo "</td>";
					
					
					echo "<td>";
					echo "" . $row["Description"]. "";
					echo "</td>";
					
					
					echo "</tr>";
				}
				echo "</table>";
			} else {
				echo "0 results";
			}
		}
	}
	
	
?>