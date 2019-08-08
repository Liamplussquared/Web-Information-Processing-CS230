<!DOCTYPE html>
<html>
<body>

<?php
	$conn = mysqli_connect("localhost", "root", "", "ebook");
	$ID = $_POST["ID"];
	$creator = $_POST["creator"];
	$title = $_POST["title"];
	$type = $_POST["type"];
	$identifier = $_POST["identifier"];
	$date = explode('-',$_POST["date"]);
	$newDate = $date[0].'-'.$date[1].'-'.$date[2];
	$language = $_POST["language"];
	$description = $_POST["description"];
	
	$sql = "INSERT INTO eBook_MetaData(id, creator, title, type, identifier, date, language, description) VALUES ('$ID','$creator','$title','$type','$identifier','$newDate','$language','$description')";
	//$sql = "INSERT INTO ebook_metadata (id, creator, title, type, identifier, date, language, description) VALUES ($ID, $creator, $title, $type, $identifier, '2019-03-06', $language, $description)";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully: ";
		echo "$ID, $creator, $title, $type, $identifier, '2019-03-06', $language, $description";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?>

<body>
</html>